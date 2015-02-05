<?php

namespace Weblee\Mandrill;

use Mandrill;

class Mail
{
    /**
     * Mandrill Api
     *
     * @var Mandrill
     */
    private $mandrill;

    /**
     * Initialize the Mandrill Class
     *
     * @param $apikey
     */
    function __construct($apikey)
    {
        $this->mandrill = new Mandrill($apikey);
    }

    /**
     * Return the information about the API-connected user
     *
     * @return \Mandrill_Users
     */
    public function users()
    {
        return $this->mandrill->users;
    }

    /**
     * Send a new transactional message through Mandrill
     *
     * @return \Mandrill_Messages
     */
    public function messages()
    {
        return $this->mandrill->messages;
    }

    /**
     * Return all of the user-defined tag information
     *
     * @return \Mandrill_Tags
     */
    public function tags()
    {
        return $this->mandrill->tags;
    }

    /**
     * Adds an email to your email rejection blacklist.
     *
     * @return \Mandrill_Rejects
     */
    public function rejects()
    {
        return $this->mandrill->rejects;
    }

    /**
     * Adds an email to your email rejection whitelist.
     * If the address is currently on your blacklist,
     * that blacklist entry will be removed automatically.
     *
     * @return mixed
     */
    public function whitelists()
    {
        return $this->mandrill->whitelists;
    }

    /**
     * Return the senders that have tried to use this account.
     *
     * @return \Mandrill_Senders
     */
    public function senders()
    {
        return $this->mandrill->senders;
    }

    /**
     * Get the 100 most clicked URLs
     *
     * @return \Mandrill_Urls
     */
    public function urls()
    {
        return $this->mandrill->urls;
    }

    /**
     * Add a new template
     *
     * @return \Mandrill_Templates
     */
    public function templates()
    {
        return $this->mandrill->templates;
    }

    /**
     * Get the list of all webhooks defined on the account
     *
     *
     */
    public function webhooks()
    {
        return $this->mandrill->webhooks;
    }

    /**
     * Get the list of subaccounts defined for the account,
     * optionally filtered by a prefix
     *
     * @return \Mandrill_Subaccounts
     */
    public function subaccounts()
    {
        return $this->mandrill->subaccounts;
    }

    /**
     * List the domains that have been configured for inbound delivery
     *
     * @return \Mandrill_Inbound
     */
    public function inbound()
    {
        return $this->mandrill->inbound;
    }

    /**
     * Returns information about an export job.
     *
     * @return \Mandrill_Exports
     */
    public function exports()
    {
        return $this->mandrill->exports;
    }

    /**
     * Lists your dedicated IPs.
     *
     * @return \Mandrill_Ips
     */
    public function ips()
    {
        return $this->mandrill->ips;
    }

    /**
     * Get the list of custom metadata fields indexed for the account.
     *
     * @return \Mandrill_Metadata
     */
    public function metadata()
    {
        return $this->mandrill->metadata;
    }

}