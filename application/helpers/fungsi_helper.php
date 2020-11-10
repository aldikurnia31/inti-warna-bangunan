<?php
function userdata($field)
{
    $ci = get_instance();
    $ci->load->model('userdata', 'userdata');

    $userid = $ci->session->userdata('login_session')['admin'];
    return $ci->admin->get('admin', ['id' => $userid])[$field];
}
?>