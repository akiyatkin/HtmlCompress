<?php

/*
 * This file is part of HtmlCompress.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\HtmlCompress\Tests;

/**
 * Class FactoryTest
 *
 * @package WyriHaximus\HtmlCompress\Tests
 */
class FactoryTest extends \PHPUnit_Framework_TestCase {

    public function testConstructFastest() {
        $parser = \WyriHaximus\HtmlCompress\Factory::constructFastest('<html><p> <span>foo bar</span> </p></html>html>');
        $this->assertInstanceOf('WyriHaximus\HtmlCompress\Parser', $parser);
    }

    public function testConstruct() {
        $parser = \WyriHaximus\HtmlCompress\Factory::construct('<html><p> <span>foo bar</span> </p></html>html>');
        $this->assertInstanceOf('WyriHaximus\HtmlCompress\Parser', $parser);
    }

    public function testConstructSmallest() {
        $parser = \WyriHaximus\HtmlCompress\Factory::constructSmallest('<html><p> <span>foo bar</span> </p></html>html>');
        $this->assertInstanceOf('WyriHaximus\HtmlCompress\Parser', $parser);
    }

}