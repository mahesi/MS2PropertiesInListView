<?php
namespace MS2PropertiesInListView\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Content\Product\Events\ProductListingCriteriaEvent;

class PropertiesInListSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        // Return the events to listen to as array like this:  <event to listen to> => <method to execute>
        return [
            ProductListingCriteriaEvent::class => 'handleListingRequest',
        ];
    }

    public function handleListingRequest(ProductListingCriteriaEvent $event): void
    {
        $event->getCriteria()->addAssociation('properties');
    }
}