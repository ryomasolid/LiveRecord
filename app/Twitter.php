<?php

namespace App\UserFunctions;

use Abraham\TwitterOAuth\TwitterOAuth;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Support\Facades\Log;

class TwitterManager
{

    private const TWITTER_API_KEY = "luu3f7kwpXHF3wgIV8JCJUz4i";
    private const TWITTER_API_SECRET_KEY = "Oz4lZqsv36e0Az1DVtBmHaQ8rlxI7XM6qu1qP6oDCnKJ3DHuI7";
    private const TWITTER_CLIENT_ID_ACCESS_TOKEN = "AAAAAAAAAAAAAAAAAAAAAMCQdwEAAAAAECdtiXoPtkPGtmtZtjVddH5Dykc%3DdfpT7S52S6EqO0jc2vynkHmgrmZvQM9EgMlEhT2QdI5Lm9kWDD";
    // private const TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET = "（45文字の文字列）";
    // Bearer token: AAAAAAAAAAAAAAAA.....XYZ


    // 投稿
    public function tweet()
    {
        $twitter = new TwitterOAuth(
            self::TWITTER_API_KEY,
            self::TWITTER_API_SECRET_KEY,
            self::TWITTER_CLIENT_ID_ACCESS_TOKEN,
            self::TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET
        );


        $message = <<<EOT
テスト投稿
EOT;
        }


        $ret = $twitter->post("statuses/update", [
            "status" =>$message]);
        var_dump(json_decode(json_encode($ret,320), true, 320)['errors'][0]['message']);
    }
}