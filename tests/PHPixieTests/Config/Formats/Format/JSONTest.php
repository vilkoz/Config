<?php

namespace PHPixieTests\Config\Formats\Format;

/**
 * @coversDefaultClass \PHPixie\Config\Formats\Format\JSON
 */
class JSONTest extends \PHPixieTests\Config\Formats\FormatTest
{
    /**
     * @covers ::read
     * @covers ::<protected>
     */
    public function testReadInvalid()
    {
        file_put_contents($this->file, '{{');
        $this->setExpectedException('\PHPixie\Config\Exception');
        $this->handler->read($this->file);
    }
    
    protected function handler()
    {
        return new \PHPixie\Config\Formats\Format\JSON();
    }

}
