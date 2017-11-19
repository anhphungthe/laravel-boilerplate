<?php namespace Tests\Models;

use App\Models\Channel;
use Tests\TestCase;

class ChannelTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Models\Channel $channel */
        $channel = new Channel();
        $this->assertNotNull($channel);
    }

    public function testStoreNew()
    {
        /** @var  \App\Models\Channel $channel */
        $channelModel = new Channel();

        $channelData = factory(Channel::class)->make();
        foreach( $channelData->toFillableArray() as $key => $value ) {
            $channelModel->$key = $value;
        }
        $channelModel->save();

        $this->assertNotNull(Channel::find($channelModel->id));
    }

}
