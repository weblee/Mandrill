<?php

namespace spec\Weblee\Mandrill;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MailSpec extends ObjectBehavior
{
    /**
     * Construct with a apikey
     */
    function let()
    {
        $this->beConstructedWith('ABC123');
    }

    /**
     *
     */
    function it_is_initializable()
    {
        $this->shouldHaveType('Weblee\Mandrill\Mail');
    }

    /**
     * Returns Mandrill_Users
     */
    function it_should_return_users()
    {
        $this->users()->shouldBeAnInstanceOf('Mandrill_Users');
    }

    /**
     * Returns Mandrill_Tags
     */
    function it_should_return_tags()
    {
        $this->tags()->shouldBeAnInstanceOf('Mandrill_Tags');
    }

    /**
     * Returns instance of Mandrill_Rejects
     */
    function it_should_return_rejects()
    {
        $this->rejects()->shouldBeAnInstanceOf('Mandrill_Rejects');
    }

    /**
     * Returns instance of Mandrill_Whitelists
     */
    function it_should_return_whitelists()
    {
        $this->whitelists()->shouldBeAnInstanceOf('Mandrill_Whitelists');
    }

    /**
     * Return instance of Mandrill_Senders
     */
    function it_should_return_senders()
    {
        $this->senders()->shouldBeAnInstanceOf('Mandrill_Senders');
    }

    /**
     * Return instance of Mandrill_Urls
     */
    function it_should_return_urls()
    {
        $this->urls()->shouldBeAnInstanceOf('Mandrill_Urls');
    }

    /**
     * Return instance of Mandrill_Templates
     */
    function it_should_return_templates()
    {
        $this->templates()->shouldBeAnInstanceOf('Mandrill_Templates');
    }

    /**
     * Return instance of Mandrill_Webhooks
     */
    function it_should_return_webhooks()
    {
        $this->webhooks()->shouldBeAnInstanceOf('Mandrill_Webhooks');
    }

    /**
     * Return instance of Mandrill_Subaccounts
     */
    function it_should_return_subaccounts()
    {
        $this->subaccounts()->shouldBeAnInstanceOf('Mandrill_Subaccounts');
    }

    /**
     * Return instance of Mandrill_Inbound
     */
    function it_should_return_inbound()
    {
        $this->inbound()->shouldBeAnInstanceOf('Mandrill_Inbound');
    }

    /**
     * Return instance of Mandrill_Exports
     */
    function it_should_return_exports()
    {
        $this->exports()->shouldBeAnInstanceOf('Mandrill_Exports');
    }

    /**
     * Return instance of Mandrill_Ips
     */
    function it_should_return_ips()
    {
        $this->ips()->shouldBeAnInstanceOf('Mandrill_Ips');
    }

    /**
     * Return instance of Mandrill_Metadata
     */
    function it_should_return_metadata()
    {
        $this->metadata()->shouldBeAnInstanceOf('Mandrill_Metadata');
    }
}
