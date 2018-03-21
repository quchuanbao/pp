<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LogRequest;
use Illuminate\Support\Facades\Auth;

class Log extends Model
{
    public static function saveLog($option)
    {
        $logRequest = new LogRequest();
        $logRequest->method = $option['request']->method();
        $logRequest->finger = $option['request']->fingerprint();
        $logRequest->host = $option['request']->root();
        $logRequest->uri = $option['request']->path();
        $logRequest->ip = $option['request']->ip();
        $logRequest->user_agent = $option['request']->userAgent();
        $logRequest->params = json_encode($option['request']->toArray());
        $logRequest->full_url = $option['request']->fullUrl();
        $logRequest->save();

        $log = new log();
        $log->log_id = $logRequest->id;
        $log->user_id = Auth::id();
        $log->union_id = $option['unionId'];
        $log->action_type = $option['actionType'];
        $log->action = $option['action'];
        $log->description = $option['description'];
        $log->data = json_encode($option['request']->toArray());
        $log->save();
    }
    public function userInfo()
    {
        return $this->belongsTo('App\Admin', 'user_id');
    }
    public static function getList($option){
        //$option[]=['user_id',Auth::id()];
        return Log::orderBy('id', 'desc')->where($option)->paginate(10);
    }
}
