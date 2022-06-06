<?php

declare(strict_types=1);

namespace App\Tests\Behat;

use Behat\Behat\Context\Context;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Webmozart\Assert\Assert;

final class ShoppingCardContext implements Context
{
    private ?Response $response;

    public function __construct(private readonly KernelInterface $kernel)
    {
    }

    /**
     * @When I go to :path
     */
    public function aDemoScenarioSendsARequestTo(string $path): void
    {
        $this->response = $this->kernel->handle(Request::create($path, 'GET'));
    }

    /**
     * @Then I should see :text
     */
    public function thenIShouldSee(string $text): void
    {
        Assert::contains($this->response->getContent(), $text);
    }
}
