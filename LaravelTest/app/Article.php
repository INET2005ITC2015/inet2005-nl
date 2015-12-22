<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'title', 'alias','all_pages', 'description', 'html_content'
    ];

    protected $hidden = ['created_by', 'modified_by'];

    public static function boot()
    {
        // Update field update_by with current user id each time article is updated.
        static::updating(function ($article) {
            $article->modified_by = \Auth::user()->id;
        });
    }

    /**
     * Always alias be without space
     */
    public function getAliasAttribute($value) {
        return $value;
    }

    public function setAliasAttribute($value) {
        $sPattern = '/\s*/m';
        $sReplace = '';
        $value = preg_replace( $sPattern, $sReplace, $value);
        $this->attributes['alias'] = $value;
    }

   public function contentAreas(){

        return $this->belongsToMany('App\ContentArea')->withTimestamps();
    }

    public function pages(){

        return $this->belongsToMany('App\Page')->withTimestamps();
    }

    public function getPageListAttribute(){

        return $this->pages->lists('id');
    }

    public function getAreaListAttribute(){

        return $this->contentareas->lists('id');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

}
