<?php 
/**
 * @author Lloyd Zhou (lloydzhou@qq.com)
 * A observable trait observable
 */

trait Observable {
    protected $callbacks = array();
    public function on($event, $cb){
        if (!isset($this->callbacks[$event]))
            $this->off($event);
        if (is_callable($cb))
            array_push($this->callbacks[$event], $cb);
        return $this;
    }
    public function off($event){
        $this->callbacks[$event] = array();
        return $this;
    }
    public function trigger(){
        $args = func_get_args();
        $event = array_shift($args);
        foreach(isset($this->callbacks[$event]) ? $this->callbacks[$event] : array() as $cb)
            call_user_func_array($cb, $args);
        return $this;
    }
}

