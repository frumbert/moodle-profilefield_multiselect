<?php

class profile_define_multiselect extends profile_define_base {

    function define_form_specific($form) {
        /// Param 1 for menu type contains the options
        $form->addElement('textarea', 'param1', get_string('profilemenuoptions', 'admin'), array('rows' => 6, 'cols' => 40));
        $form->setType('param1', PARAM_TEXT);

        /// Default data
        $form->addElement('textarea', 'defaultdata', get_string('defaultoptions', 'profilefield_multiselect'), array('rows' => 4, 'cols' => 40));
        $form->setType('defaultdata', PARAM_TEXT);
    }

    function define_validate_specific($data, $files) {
        $err = array();

        $data->param1 = str_replace("\r", '', $data->param1); // stop it windows
        $data->defaultdata = str_replace("\r", '', $data->defaultdata); // everybody elses just uses \n

        $options = explode("\n", $data->param1);
        $options = array_map("trim", $options); // ignore surrounding whitespace for better matching
        $defaults = explode("\n" , $data->defaultdata);
        $defaults = array_map("trim", $defaults);

        $goodo = count(array_intersect($defaults,$options)) > 0;

        /// Check that we have at least 2 options
        if (count($options) == 0) {
            $err['param1'] = get_string('profilemenunooptions', 'admin');
        } elseif (count($options) < 2) {
            $err['param1'] = get_string('profilemenutoofewoptions', 'admin');

        /// Check the default data exists in the options
        } elseif (!$goodo) {
            $err['defaultdata'] = get_string('profilemenudefaultnotinoptions', 'profilefield_multiselect');
        }
        return $err;
    }

    function define_save_preprocess($data) {
        $data->param1 = str_replace("\r", '', $data->param1);
        $data->defaultdata = str_replace("\r", '', $data->defaultdata);

        return $data;
    }

}


