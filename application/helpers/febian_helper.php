<?php

function sudah_login()
{
  $ci = get_instance();
  if(!$ci->session->userdata('email')) {
    redirect('login_page');
  }
}
