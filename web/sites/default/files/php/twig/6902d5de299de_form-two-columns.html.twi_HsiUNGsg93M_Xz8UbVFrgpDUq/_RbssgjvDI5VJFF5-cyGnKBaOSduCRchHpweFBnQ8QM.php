<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bootstrap5_admin/form/form-two-columns.html.twig */
class __TwigTemplate_9681aafe56ecbfa42ea999bbb1aa2acc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'secondary' => [$this, 'block_secondary'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"layout-form clearfix row\">
  <div class=\"layout-region layout-region--main\">
    <div class=\"layout-region__content\">
      ";
        // line 5
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 7
        yield "    </div>
  </div>
  <div class=\"offcanvas offcanvas-end layout-region layout-region--secondary\" tabindex=\"-1\" id=\"offcanvasSecondary\" aria-labelledby=\"offcanvasSecondaryLabel\">
    <div class=\"offcanvas-header\">
      <h5 class=\"offcanvas-title\" id=\"offcanvasSecondaryLabel\">";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["form"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "#title", [], "array", false, false, true, 11)), "html", null, true);
        yield "</h5>
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"layout-region__content offcanvas-body\">
      ";
        // line 15
        yield from $this->unwrap()->yieldBlock('secondary', $context, $blocks);
        // line 17
        yield "    </div>
  </div>
  <div class=\"layout-region layout-region--footer\">
    <div class=\"layout-region__content d-flex justify-content-end py-2\">
      ";
        // line 21
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 23
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form"]);        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "      ";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_secondary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "      ";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bootstrap5_admin/form/form-two-columns.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  117 => 22,  110 => 21,  105 => 16,  98 => 15,  93 => 6,  86 => 5,  77 => 23,  75 => 21,  69 => 17,  67 => 15,  60 => 11,  54 => 7,  52 => 5,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bootstrap5_admin/form/form-two-columns.html.twig", "D:\\wamp64\\www\\campus-project\\web\\themes\\contrib\\bootstrap5_admin\\templates\\form\\form-two-columns.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 5];
        static $filters = ["escape" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
