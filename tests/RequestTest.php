<?php

namespace tests\RequestTest;
use PHPUnit\Framework\TestCase;
use Request;

class RequestTest extends TestCase
{
    public function testThatWeCanGetTheStatus()
    {
        $request = new Request();
        $request->setStatus(200);
        $this->assertEquals($request->getStatus(),200);
    }
    public function testThatWeCanGetTheStatusMessage()
    {
        $request = new Request();
        $request->setStatusMessage('OK!');
        $this->assertEquals($request->getStatusMessage(),'OK!');
    }
    public function testIsSettingDataIsWorking()
    {
        $request = new Request();
        $request->setData('SOME JSON FILE DATA');
        $this->assertEquals($request->getData(),'SOME JSON FILE DATA');
    }

    public function testThatDateTimeIsSetWhenRequestIsCalled()
    {
        $request = new Request();
        $this->assertEmpty($request->getDateTime(),false);
    }
}
