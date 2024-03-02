<?php 
class userManager{

    public $tokens = [];
    const MAX_TOKEN_PER_USER = 10;

    function generate($user) {
        
        //generate random token
        $token = bin2hex(random_bytes(16));

        //check user already on array
        if (!isset($this->tokens[$user])) {
            $this->tokens[$user] = [];
        }

        //Token on user more than 10 tokens
        if (count($this->tokens[$user]) >= self::MAX_TOKEN_PER_USER) {
            array_shift($this->tokens[$user]);
        }

        //add new token to this users token array
        array_push($this->tokens[$user],$token);

        //return generated token
        return $token;

    }

    function verify($user, $token) {
        
        //check if there an array for this user
        if (!isset($this->tokens[$user])) {
            return false;
        }

        //check if token exist in this user
        if (($key = array_search($token,$this->tokens[$user])) !== false ) {
            //remove token
            unset($this->tokens[$user][$key]);

            return true;
        }else{

            return false;
        }


    }

}

$userManager = new userManager();

$token1 = $userManager->generate('ghozi');
$token2 = $userManager->generate('ghozi');
$token3 = $userManager->generate('budi');

$verify = $userManager->verify('ghozi',$token1);


?>