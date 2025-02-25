<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('TCPdf_pdf');
        $this->load->model('MacrosModel');
        $this->load->model('Register_model');
        $this->_check_session();
    }

    private function _check_session() {
        if (!$this->session->has_userdata('name') || !$this->session->is_loggedin) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Please Login to continue!!</strong><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">X</a></div>');
            redirect('login');
        }
    }

    // public function index() {
    //     $user_id = $this->input->get('user_id');
    //     $data['name'] = $this->session->userdata('name') ?? '';
    //     $data['user_id'] = $user_id;

    //     $this->load->view('HomePage/weather_inference_code.php', $data);

    //     header("Access-Control-Allow-Origin: http://weather-imd-test.rimes.int");
    //     header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    // }

    public function index() {
       $this->load->library('session');

       $user_id = $this->input->get('user_id');
    
       // 
       if ($user_id) {
           $this->session->set_userdata('user_id', $user_id);
       } else {
           $user_id = $this->session->userdata('user_id');
       }

       $data['name'] = $this->session->userdata('name') ?? '';
       $data['user_id'] = $user_id;
   
       $this->load->view('HomePage/weather_inference_code.php', $data);

       header("Access-Control-Allow-Origin: http://weather-imd-test.rimes.int");
       header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    }


    // 
    public function Menu(){
       $name = '';
       if ($this->session->has_userdata('name')) {
           $name = $this->session->userdata('name');
       }
       $data['name'] = $name;

       $this->load->view('Menu/Landing_page', $data);
    }

    public function submitForm() {
    $data = json_decode(file_get_contents("php://input"), true);

    $macroAddArr = $data['macroAddArr'];

    foreach ($macroAddArr as $macroItem) {
        $macroname = $macroItem['macroName'];
        $modelname = $macroItem['modelName'];
        $parametername = $macroItem['parameterName'];
        $subparametername = $macroItem['subParameterName'];
        $user_id = $macroItem['user_id'];

        $this->MacrosModel->saveMacroData($macroname, $modelname, $parametername, $subparametername, $user_id);
    }

    echo "Form submitted successfully.";
    }



    // getUserMacros is for userPrespective MacroGroup-Name
    public function getUserMacros() {
    $user_id = $this->input->get('user_id');
    $macros = $this->MacrosModel->getMacrosByUserId($user_id);

    echo json_encode($macros);
    }

    // getAllMacros is for superadmin to view all MACROGROUP-Name
    public function getAllMacros() {
    $macros = $this->MacrosModel->getAllMacros();
    echo json_encode($macros);
    }



    public function getMacroByMacroname() {
    $macroname = $this->input->get('macroname');

    if (!empty($macroname)) {
        $macroDetails = $this->MacrosModel->getMacroDetailsByMacroname($macroname);
        log_message('debug', 'Macro Details: ' . json_encode($macroDetails));
        echo json_encode($macroDetails);
    } else {
        echo json_encode(null);
    }
    }



    public function getMacroById() {
    $ulId = $this->input->get('ulId');
    $macro = $this->MacrosModel->getMacroById($ulId);
    echo json_encode($macro);
    }


    public function edit_macro() {
    $data = json_decode(file_get_contents("php://input"), true);
    $macroName = $data['macroName'];

    // Retrieve macro details including the id
    $macro = $this->MacrosModel->getMacroByMacroname($macroName);

    // Return the macro details along with the id as JSON response
    header('Content-Type: application/json');
    echo json_encode($macro);
    }


    public function updateMacro() {
    // Retrieve JSON data from the request body
    $data = json_decode(file_get_contents("php://input"), true);

    // Extract data from the JSON
    $id = $data['id'];
    $macroName = $data['macroName'];
    $modelName = $data['modelName'];
    $parameterName = $data['parameterName'];
    $subParameterName = $data['subParameterName'];
    $user_id = $data['user_id']; 

    // Update the values in the database using your model function
    $updated = $this->MacrosModel->updateMacroValues($id, $macroName, $modelName, $parameterName, $subParameterName, $user_id);

    // Check if update was successful
    if ($updated) {
        // Return a success response
        echo json_encode(array('message' => 'Values updated successfully'));
    } else {
        // Return an error response
        http_response_code(500);
        echo json_encode(array('message' => 'Error occurred while updating values'));
    }
    }
    


    public function delete_macro() {
    $data = json_decode(file_get_contents("php://input"), true);

    $macroname = $data['macroname'];
    $userName = $data['userName'];
    $deleteReason = $data['deleteReason'];

    // Insert the data into the deleted_macros table
    $this->MacrosModel->logDeletedMacro($macroname, $userName, $deleteReason);

    // Delete the macro
    $this->MacrosModel->deleteMacroByMacroname($macroname);

    echo "Macro(s) deleted and logged successfully.";
    }




    public function delete_macro_by_id() {
    $data = json_decode(file_get_contents("php://input"), true);

    if(isset($data['macroId'])) {
        $macroId = $data['macroId'];
        $this->MacrosModel->deleteMacroById($macroId);
        echo "Macro deleted successfully.";
    } else {
        echo "Macro ID not provided.";
    }
    }



    public function deleteAndLogMacro() {
    $data = json_decode(file_get_contents("php://input"), true);

    $macroname = $data['macroname'];
    $userName = $data['userName'];
    $deleteReason = $data['deleteReason'];

    // Delete the macro
    $this->MacrosModel->deleteMacroByMacroname($macroname);
    // Log the deletion in the deleted macros table
    $this->MacrosModel->logDeletedMacro($macroname, $userName, $deleteReason);
    echo "Macro deleted and logged successfully.";
    }

    

    // Deleted MacroGroupName view by [SuperAdmin]
    public function displayDeletedMacros() {
        $data['result'] = $this->MacrosModel->getDeletedMacros();
        $this->load->view('HomePage/DeletedMacrosTable', $data);
    }

     // SuperAdmin User MacroGroup Filteration
    public function getUserIdByName() {
    $name = $this->input->get('name');
    $response = array(
        'user_id' => 'User ID fetched for ' . $name
    );
    echo json_encode($response);
    }

    // usernames showing in dialog box
    public function fetch_names() {
    $names = $this->MacrosModel->getUserNames();
    echo json_encode($names);
    }
    
    public function fetch_user_details($userName) {
        $userDetails = $this->Register_model->get_user_by_name($userName);
        if ($userDetails) {
            echo json_encode($userDetails);
        } else {
            echo json_encode(array('error' => 'User not found'));
        }
    }

    public function fetchMacrosByUserId($user_id_users) {
    $macros = $this->MacrosModel->getMacrosByUserId($user_id_users);
    
    // Check if any macros were found
    if ($macros) {
        // Return the macros as JSON response
        echo json_encode($macros);
    } else {
        // Return an empty array if no macros were found
        echo json_encode([]);
    }
    }

    

    public function Rainfall_Val(){
        $this->load->view('Menu/Rainfall_Validation.php');
    }
}