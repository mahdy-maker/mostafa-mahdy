<?php
namespace app\Database\models\contract;
interface crud{
    public function create ();
    public function update ();
    public function read ();
    public function delete ();
}
