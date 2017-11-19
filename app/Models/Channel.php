<?php namespace App\Models;



class Channel extends Base
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'channel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ChannelId',
        'SiteId',
        'Name',
        'Url',
        'Order',
        'ParentId',
        'Status',
        'CreatedDate',
        'ModifiedDate',
        'CatId',
        'DisplayStyle',
        'ShowOnHome',
        'Invisibled',
        'Keyword',
        'ListNewsZoneId',
        'Avatar',
        'AvatarCover',
        'ZoneRelation',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates  = [];

    protected $presenter = \App\Presenters\ChannelPresenter::class;

    // Relations
    
    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'id' => $this->id,
            'ChannelId' => $this->ChannelId,
            'SiteId' => $this->SiteId,
            'Name' => $this->Name,
            'Url' => $this->Url,
            'Order' => $this->Order,
            'ParentId' => $this->ParentId,
            'Status' => $this->Status,
            'CreatedDate' => $this->CreatedDate,
            'ModifiedDate' => $this->ModifiedDate,
            'CatId' => $this->CatId,
            'DisplayStyle' => $this->DisplayStyle,
            'ShowOnHome' => $this->ShowOnHome,
            'Invisibled' => $this->Invisibled,
            'Keyword' => $this->Keyword,
            'ListNewsZoneId' => $this->ListNewsZoneId,
            'Avatar' => $this->Avatar,
            'AvatarCover' => $this->AvatarCover,
            'ZoneRelation' => $this->ZoneRelation,
        ];
    }

}
