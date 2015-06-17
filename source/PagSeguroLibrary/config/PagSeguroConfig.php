<?php
/**
 * 2007-2014 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 *Licensed under the Apache License, Version 2.0 (the "License");
 *you may not use this file except in compliance with the License.
 *You may obtain a copy of the License at
 *
 *http://www.apache.org/licenses/LICENSE-2.0
 *
 *Unless required by applicable law or agreed to in writing, software
 *distributed under the License is distributed on an "AS IS" BASIS,
 *WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *See the License for the specific language governing permissions and
 *limitations under the License.
 *
 *  @author    PagSeguro Internet Ltda.
 *  @copyright 2007-2014 PagSeguro Internet Ltda.
 *  @license   http://www.apache.org/licenses/LICENSE-2.0
 */
 
class PagSeguroConfigWrapper
{
    public static function getConfig()
    {
        $PagSeguroConfig = array();

        $PagSeguroConfig['environment'] = "sandbox"; // production, sandbox

        $PagSeguroConfig['credentials'] = array();
        $PagSeguroConfig['credentials']['email'] = "gabrieldemedeiros83@gmail.com";
        $PagSeguroConfig['credentials']['token']['production'] = "your_production_pagseguro_token";
        $PagSeguroConfig['credentials']['token']['sandbox'] = "E6FBABE6EBCD495F9F0324646F44BBAC";
        $PagSeguroConfig['credentials']['appId']['production'] = "your__production_pagseguro_application_id";
        $PagSeguroConfig['credentials']['appId']['sandbox'] = "app3743210937";
        $PagSeguroConfig['credentials']['appKey']['production'] = "your_production_application_key";
        $PagSeguroConfig['credentials']['appKey']['sandbox'] = "0538E924A9A93F9DD4177FBD3B2C3537";

        $PagSeguroConfig['application'] = array();
        $PagSeguroConfig['application']['charset'] = "UTF-8"; // UTF-8, ISO-8859-1

        $PagSeguroConfig['log'] = array();
        $PagSeguroConfig['log']['active'] = false;
        // Informe o path completo (relativo ao path da lib) para o arquivo, ex.: ../PagSeguroLibrary/logs.txt
        $PagSeguroConfig['log']['fileLocation'] = "";

        return $PagSeguroConfig;
    }
}