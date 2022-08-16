<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pokemon/index.html.twig */
class __TwigTemplate_1db4c35c8af95931fa2e6dd35ec4645c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PokemonController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Welocome to pokemon page</h1>

<div class=\"container\">
        <form class=\"row g-3\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_filter");
        echo "\" method=\"post\">
        <div class=\"col-2\">
                <select name=\"type\" class=\"form-select\" aria-label=\"Default select example\">
                <option selected>--All type-- </option>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 14
            echo "                        <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "english", [], "any", false, false, false, 14), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </select>
         </div>
        <div class=\"col-2\">
            <button class=\"btn btn-sm btn-success\" type=\"submit\"> Appliquer</button>
        </div>
        
    </form>
    <form class=\"row g-3\" action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_compare");
        echo "\" method=\"post\">
        <div class=\"col-2\">
                <select name=\"first_pokemon\" class=\"form-select\" aria-label=\"Default select example\">
                <option selected>--First pokemon-- </option>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 28
            echo "                        <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "english", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </select>
               
         </div>
                 <div class=\"col-2\">
               
                <select name=\"second_pokemon\" class=\"form-select\" aria-label=\"Default select example\">
                <option selected>--Second pokemon-- </option>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 38
            echo "                        <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "english", [], "any", false, false, false, 38), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </select>
         </div>
        <div class=\"col-2\">
            <button class=\"btn btn-sm btn-success\" type=\"submit\"> Compare</button>
        </div>
        
    </form>
    <div>

    </div>
</div>
<table class=\"table\">

  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\"> Name</th>
      <th scope=\"col\">Types</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\">HP</th>
      <th scope=\"col\">Attack</th>
      <th scope=\"col\">Defense</th>
      <th scope=\"col\">Sp. Atk</th>
      <th scope=\"col\">Sp. Def</th>
      <th scope=\"col\">Speed</th>
    </tr>
  </thead>
  <tbody>
     ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 69
            echo "        <tr>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>  
                <td>
                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">
                 ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "english", [], "any", false, false, false, 73), "html", null, true);
            echo "
                </a>
                </td> 
                <td> 
                    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pokemon"], "types", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 78
                echo "                        <a href=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "english", [], "any", false, false, false, 78), "html", null, true);
                echo " </a>   <br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                </td> 
                <td> ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 81), "total", [], "any", false, false, false, 81), "html", null, true);
            echo " </td>
                <td> ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 82), "hp", [], "any", false, false, false, 82), "html", null, true);
            echo " </td>
                <td> ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 83), "attack", [], "any", false, false, false, 83), "html", null, true);
            echo " </td>
                <td> ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 84), "defence", [], "any", false, false, false, 84), "html", null, true);
            echo " </td>
                <td> ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 85), "spAtk", [], "any", false, false, false, 85), "html", null, true);
            echo " </td>
                <td> ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 86), "spDef", [], "any", false, false, false, 86), "html", null, true);
            echo " </td>
                <td> ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 87), "speed", [], "any", false, false, false, 87), "html", null, true);
            echo " </td>
                
                    
        </tr>           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
  </tbody>
</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 92,  263 => 87,  259 => 86,  255 => 85,  251 => 84,  247 => 83,  243 => 82,  239 => 81,  236 => 80,  227 => 78,  223 => 77,  216 => 73,  212 => 72,  207 => 70,  204 => 69,  200 => 68,  170 => 40,  159 => 38,  155 => 37,  146 => 30,  135 => 28,  131 => 27,  124 => 23,  115 => 16,  104 => 14,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PokemonController!{% endblock %}

{% block body %}
    <h1>Welocome to pokemon page</h1>

<div class=\"container\">
        <form class=\"row g-3\" action=\"{{ path('pokemon_filter') }}\" method=\"post\">
        <div class=\"col-2\">
                <select name=\"type\" class=\"form-select\" aria-label=\"Default select example\">
                <option selected>--All type-- </option>
                    {% for type in types %}
                        <option  value=\"{{ type.id}}\">{{ type.english}}</option>
                    {% endfor %}
                </select>
         </div>
        <div class=\"col-2\">
            <button class=\"btn btn-sm btn-success\" type=\"submit\"> Appliquer</button>
        </div>
        
    </form>
    <form class=\"row g-3\" action=\"{{ path('pokemon_compare') }}\" method=\"post\">
        <div class=\"col-2\">
                <select name=\"first_pokemon\" class=\"form-select\" aria-label=\"Default select example\">
                <option selected>--First pokemon-- </option>
                    {% for pokemon in pokemons %}
                        <option  value=\"{{ pokemon.id}}\">{{ pokemon.english}}</option>
                    {% endfor %}
                </select>
               
         </div>
                 <div class=\"col-2\">
               
                <select name=\"second_pokemon\" class=\"form-select\" aria-label=\"Default select example\">
                <option selected>--Second pokemon-- </option>
                    {% for pokemon in pokemons %}
                        <option  value=\"{{ pokemon.id}}\">{{ pokemon.english}}</option>
                    {% endfor %}
                </select>
         </div>
        <div class=\"col-2\">
            <button class=\"btn btn-sm btn-success\" type=\"submit\"> Compare</button>
        </div>
        
    </form>
    <div>

    </div>
</div>
<table class=\"table\">

  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\"> Name</th>
      <th scope=\"col\">Types</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\">HP</th>
      <th scope=\"col\">Attack</th>
      <th scope=\"col\">Defense</th>
      <th scope=\"col\">Sp. Atk</th>
      <th scope=\"col\">Sp. Def</th>
      <th scope=\"col\">Speed</th>
    </tr>
  </thead>
  <tbody>
     {% for pokemon in pokemons %}
        <tr>
                <td>{{ pokemon.id }}</td>  
                <td>
                <a href=\"{{ path('pokemon_show', {id: pokemon.id}) }}\">
                 {{ pokemon.english }}
                </a>
                </td> 
                <td> 
                    {% for type in pokemon.types %}
                        <a href=\"\">{{ type.english }} </a>   <br>
                    {% endfor %}
                </td> 
                <td> {{ pokemon.stats.total }} </td>
                <td> {{ pokemon.stats.hp }} </td>
                <td> {{ pokemon.stats.attack }} </td>
                <td> {{ pokemon.stats.defence }} </td>
                <td> {{ pokemon.stats.spAtk }} </td>
                <td> {{ pokemon.stats.spDef }} </td>
                <td> {{ pokemon.stats.speed }} </td>
                
                    
        </tr>           
        {% endfor %}

  </tbody>
</table>


{% endblock %}
", "pokemon/index.html.twig", "/var/www/pokemon_app/templates/pokemon/index.html.twig");
    }
}
