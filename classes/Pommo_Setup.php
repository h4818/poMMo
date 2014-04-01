<?php

/**
 *  released originally under GPLV2
 *
 *  This file is part of poMMo.
 *
 *  poMMo is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  poMMo is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Pommo.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  This fork is from https://github.com/soonick/poMMo
 *  Please see docs/contribs for Contributors
 */
class Pommo_Setup
{
    /**
     * If this value is null then there were no errors, else this will contain
     * an error code and error message or messages
     * @type array - This will be null or an array with this format: [
     *   'code' => 'some code for the error',
     *   'message' => [
     *      'some_key' => 'Some error message',
     *      ...
     *   ]
     * ]
     */
    public $error;

    /**
     * Tries to save bounces form
     * @param string[] data - Data to be saved, should contain these keys: [
     *   'bounces_address' => 'Email address where bounces will be sent',
     *   'bounces_server' => 'POP3 server where emails will live',
     *   'bounces_port' => 'Port to connect to POP3 server',
     *   'bounces_user' => 'User to connect to POP3 server',
     *   'bounces_password' => 'Password to connect to POP3 server'
     * ]
     * @return
     */
    public function saveBouncesForm($data)
    {
        $this->error = null;
        $messages = array();

        if (empty($data['bounces_address'])) {
            $messages['bounces_address'] = _(
                'You must specify an e-mail address where the bounces will be'
                . 'sent'
            );
        }

        $this->error = array(
            'code' => 1,
            'message' => $messages
        );

        return false;
    }
}
