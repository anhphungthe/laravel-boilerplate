<?php namespace Tests\Repositories;

use App\Models\Channel;
use Tests\TestCase;

class ChannelRepositoryTest extends TestCase
{
    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Repositories\ChannelRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ChannelRepositoryInterface::class);
        $this->assertNotNull($repository);
    }

    public function testGetList()
    {
        $channels = factory(Channel::class, 3)->create();
        $channelIds = $channels->pluck('id')->toArray();

        /** @var  \App\Repositories\ChannelRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ChannelRepositoryInterface::class);
        $this->assertNotNull($repository);

        $channelsCheck = $repository->get('id', 'asc', 0, 1);
        $this->assertInstanceOf(Channel::class, $channelsCheck[0]);

        $channelsCheck = $repository->getByIds($channelIds);
        $this->assertEquals(3, count($channelsCheck));
    }

    public function testFind()
    {
        $channels = factory(Channel::class, 3)->create();
        $channelIds = $channels->pluck('id')->toArray();

        /** @var  \App\Repositories\ChannelRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ChannelRepositoryInterface::class);
        $this->assertNotNull($repository);

        $channelCheck = $repository->find($channelIds[0]);
        $this->assertEquals($channelIds[0], $channelCheck->id);
    }

    public function testCreate()
    {
        $channelData = factory(Channel::class)->make();

        /** @var  \App\Repositories\ChannelRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ChannelRepositoryInterface::class);
        $this->assertNotNull($repository);

        $channelCheck = $repository->create($channelData->toFillableArray());
        $this->assertNotNull($channelCheck);
    }

    public function testUpdate()
    {
        $channelData = factory(Channel::class)->create();

        /** @var  \App\Repositories\ChannelRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ChannelRepositoryInterface::class);
        $this->assertNotNull($repository);

        $channelCheck = $repository->update($channelData, $channelData->toFillableArray());
        $this->assertNotNull($channelCheck);
    }

    public function testDelete()
    {
        $channelData = factory(Channel::class)->create();

        /** @var  \App\Repositories\ChannelRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ChannelRepositoryInterface::class);
        $this->assertNotNull($repository);

        $repository->delete($channelData);

        $channelCheck = $repository->find($channelData->id);
        $this->assertNull($channelCheck);
    }

}
