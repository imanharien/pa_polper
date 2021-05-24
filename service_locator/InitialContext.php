<?php
    include('Admin.php');
    include('Keluhan.php');
    include('KritikSaran.php');

    class InitialContext
    {
        public function lookup($jndiName)
        {
            if(strtolower($jndiName)=="admin")
            {
                return new Admin();
            } 
            else if(strtolower($jndiName)=="keluhan")
            {
                return new Keluhan();
            } 
            else if(strtolower($jndiName)=="kritiksaran")
            {
                return new KritikSaran();
            } 
            return null;
        }
    }