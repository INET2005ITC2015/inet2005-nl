<?php
interface iBusinessObject
{
    public static function retrieveSome($start,$count);
    public static function retrieveForSearch($start,$count, $query);
    public static function retrieveSingleActor($actorId);
    public function save();
    public function update();
    public function delete();
}
?>
