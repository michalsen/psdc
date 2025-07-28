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

/* radix:page-footer */
class __TwigTemplate_995bec19e4de66c5d5e0e164aee2885c extends Template
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
            'page_inner_footer' => [$this, 'block_page_inner_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--page-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:page-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:page-footer"));
        // line 7
        $context["footer_attributes"] = ((($context["footer_attributes"] ?? null)) ? ($context["footer_attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 9
        $context["footer_classes"] = Twig\Extension\CoreExtension::merge(["page__footer"], ((        // line 11
($context["footer_utility_classes"] ?? null)) ? ($context["footer_utility_classes"]) : ([])));
        // line 13
        yield "
";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <footer ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [($context["footer_classes"] ?? null)], "method", false, false, true, 15), "html", null, true);
            yield ">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap justify-content-md-between align-items-md-center\">
        ";
            // line 18
            yield from $this->unwrap()->yieldBlock('page_inner_footer', $context, $blocks);
            // line 21
            yield "      </div>
    </div>
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_utility_classes", "page"]);        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_inner_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 19), "html", null, true);
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:page-footer";
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
        return array (  85 => 19,  78 => 18,  68 => 21,  66 => 18,  59 => 15,  57 => 14,  54 => 13,  52 => 11,  51 => 9,  49 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:page-footer", "themes/contrib/radix/components/page-footer/page-footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "if" => 14, "block" => 18];
        static $filters = ["merge" => 11, "escape" => 15];
        static $functions = ["create_attribute" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape'],
                ['create_attribute'],
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
