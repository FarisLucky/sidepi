<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class ApiKonsumen extends REST_Controller
{
    public function __construct() {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        // Load User Model
        $this->load->model('Model_api');
    }

    public function users_post()
    {
        // $this->some_model->update_user( ... );
        $message = [
            'id' => 100, // Automatically generated by the model
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'message' => 'Added a resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }
    public function users_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
            ['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];
        // Set the response and exit
        $this->response([
            'status' => false,
            'data'=>$users,
            'message' => 'Data ADa'
        ], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code
    }
    /**
     * URL: http://localhost/CodeIgniter-JWT-Sample/auth/token
     * Method: POST
     * Header Key: Authorization
     * Value: Auth token generated in GET call
     */
    public function insertKonsumen_post()
    {
        $_POST = $this->security->xss_clean($_POST);
        $this->load->library('form_validation');
        // $headers = $this->input->request_headers();
        // if (array_key_exists('Authorization', $headers) && !empty($headers['Authorization'])) {
        //     $decodedToken = AUTHORIZATION::validateToken($headers['Authorization']);
        //     if ($decodedToken != false) {
                $this->form_validation->set_rules('id_type','Type Card','trim|required');
                $this->form_validation->set_rules('id_card','Id Card','trim|required');
                $this->form_validation->set_rules('nama_lengkap','Nama','trim|required');
                $this->form_validation->set_rules('alamat','Alamat','trim|required');
                $this->form_validation->set_rules('telp','Telepon','trim|required');
                $this->form_validation->set_rules('email','Email','trim|required');
                $this->form_validation->set_rules('foto_ktp','Email','trim|required');
                $this->form_validation->set_rules('id_user','User','trim|required|numeric');
                
                if ($this->form_validation->run() == FALSE) {
                    $message = array(
                        'status' => false,
                        'error' => $this->form_validation->error_array(),
                        'message' => validation_errors()
                    );
                    $this->response($message, REST_Controller::HTTP_NOT_FOUND);
                } else {
                    $inputData = [
                        "id_type"=>$this->input->post("id_type",true),
                        "id_card"=>$this->input->post("id_card",true),
                        "nama_lengkap"=>$this->input->post("nama_lengkap",true),
                        "alamat"=>$this->input->post("alamat",true),
                        "telp"=>$this->input->post("telp",true),
                        "email"=>$this->input->post("email",true),
                        "foto_ktp"=>$this->input->post("foto_ktp",true),
                        "status_konsumen"=>"calon konsumen",
                        "id_user"=>$this->input->post("id_user",true),
                        "tgl_buat"=>date("Y-m-d H:i:s"),
                    ];

                    if (!empty($inputData)) {
                        $query = $this->Model_api->insertData($inputData,"konsumen");
                        if ($query) {
                            $response = [
                                "status"=>true,
                                "message"=>"Berhasil ditambahkan"
                            ];
                            $this->set_response($response, REST_Controller::HTTP_OK);
                            return;
                        }
                    }else{
                        $response = [
                            "status"=>false,
                            "message"=>"Gagal ditambahkan"
                        ];
                        $this->set_response($response, REST_Controller::HTTP_NOT_FOUND);
                        return;
                    }
                }
        //     }
        // }
    }
    public function updateKonsumen_put()
    {
        $id = $this->put("id",true);
        // $this->set_response($_POST, REST_Controller::HTTP_OK);
        // return;
        if (!empty($id)) {
            $data = [
                "id_type"=>$this->put("id_type",true),
                "id_card"=>$this->put("id_card",true),
                "nama_lengkap"=>$this->put("nama_lengkap",true),
                "alamat"=>$this->put("alamat",true),
                "telp"=>$this->put("telp",true),
                "email"=>$this->put("email",true),
                "foto_ktp"=>$this->put("foto_ktp",true),
                "id_user"=>$this->put("id_user",true)
            ];
            $query = $this->Model_api->updateData($data,"konsumen",["id_konsumen"=>$id]);
            if ($query) {
                $response = [
                    "status"=>true,
                    "message"=>"Berhasil diupdate"
                ];
                $this->set_response($response, REST_Controller::HTTP_OK);
                return;
            }else{
                $response = [
                    "status"=>false,
                    "message"=>"Masukkan Id"
                ];
                $this->set_response($response, REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $response = [
                "status"=>false,
                "message"=>"Data Kosong"
            ];
            $this->set_response($response, REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function deleteKonsumen_delete()
    {
        $id = (int) $this->delete('id');

        // Validate the id.
        if (!empty($id))
        {
            // Set the response and exit
            $this->Model_api->delete(["id_konsumen"=>$id],"konsumen");
            $response = [
                "status"=>true,
                "message"=>"Berhasil dihapus"
            ];
            return $this->set_response($response, REST_Controller::HTTP_OK);
        }else{
            $response = [
                "status"=>true,
                "message"=>"Berhasil diupdate"
            ];
            return $this->set_response($response, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
        }

        // $this->some_model->delete_something($id);
    }
}