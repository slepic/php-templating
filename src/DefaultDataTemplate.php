<?php

declare(strict_types=1);

namespace Slepic\Templating\Template;

class DefaultDataTemplate implements TemplateInterface
{
    private TemplateInterface $template;
    private array $data;

    /**
     * @param TemplateInterface $template
     * @param array<string,mixed> $data
     */
    public function __construct(TemplateInterface $template, array $data)
    {
        $this->template = $template;
        $this->data = $data;
    }

    public function render(array $data): string
    {
        $allData = \array_merge($this->data, $data);
        return $this->template->render($allData);
    }
}
