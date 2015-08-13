<?php
class GoogleTest extends TestCaseBase
{
    //the embed code for gmaps does not work. Need to investigate.
    public function _testMap()
    {
        $info = Embed\Embed::create('https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0');

        $this->assertString($info->title, 'Google Maps');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe src="https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0?output=embed&amp;s=" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>');
        $this->assertString($info->providerName, 'Google Maps');
    }

    public function testDrive()
    {
        $info = Embed\Embed::create('https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/view');

        $this->assertString($info->title, 'Entrevista_Rianxo_RadioFusion_150724.mp3');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe src="https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/preview" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>');
        $this->assertString($info->providerName, 'Google Docs');
    }
}
