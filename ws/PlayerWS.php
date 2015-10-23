<?php

class PlayerWS {
    
    const ACTION_UPDATE ='update';
    const ACTION_PLAY ='play';
    const ACTION_STOP ='stop';
    const PARAM_ACTION = 'action';
    const PARAM_PLAYER_STATE = 'statePlayer';
    const PARAM_TIME = 'time';
    
        public function DoGet() {
            return $this->DoPost();
    }
        public function DoPost() {
            
            if (!isset($_GET[PARAM_ACTION]))
				Helper::ThrowAccessDenied();

			switch ($_GET[PARAM_ACTION])
			{
				case ACTION_TIME_UPDATE:
					return $this->update();
                                case ACTION_PLAY:
                                        return $this->play();
                                case ACTION_STOP:
                                        return $this->stop();
                                            

				default:
					Helper::ThrowAccessDenied();
					break;
			}
            
    }
        public function update() {
            if(!isset($_GET[PARAM_PLAYER]) ||
                !isset($_GET[PARAM_TIME]))
                    Helper::ThrowAccessDenied();
            
            $time= json_decode($_POST[PARAM_TIME]);
                    
                    
        
    }
        public function DoDelete() {
        
    }
}