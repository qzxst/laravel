<?php


namespace App\Listeners;


use Dingo\Api\Event\ResponseWasMorphed;

class AddPaginationLinksToResponse
{

    public function __construct()
    {
    }

    public function handle(ResponseWasMorphed $event)
    {
        if (isset($event->content['meta']['pagination'])) {
            $links = $event->content['meta']['pagination']['links'];

            $event->response->headers->set(
                'link',
                sprintf('<%s>; rel="next", <%s>; rel="prev"', $links['next'], $links['previous'])
            );
        }
    }
}
