<?php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
/**
 * An example howto inject a default KnpMenu to the Navbar
 * see also Resources/config/example_menu.yml
 * and example_navbar.yml
 * @author phiamo
 *
 */
class Builder
{
    public function createMainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'navbar' => true,
        ));
        $layout = $menu->addChild('Layout', array(
            'icon' => 'home',
            'route' => 'home_page',
        ));
        $dropdown = $menu->addChild('Forms', array(
            'dropdown' => true,
            'caret' => true,
        ));
        $dropdown->addChild('Examples', array('route' => 'pupils'));
        $menu->addChild('Menus & Navbars', array('route' => 'pupils'));
        $menu->addChild('Macros for components', array('route' => 'pupils'));
        return $menu;
    }
    public function createNavbarsSubnavMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'subnavbar' => true,
        ));
        $menu->addChild('Top', array('uri' => '#top'));
        $menu->addChild('Menus', array('uri' => '#menus'));
        $menu->addChild('Navbars', array('uri' => '#navbars'));
        $menu->addChild('Template', array('uri' => '#template'));
        // ... add more children
        return $menu;
    }
    public function createComponentsSubnavMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'subnavbar' => true,
        ));
        $menu->addChild('Top', array('uri' => '#top'));
        $menu->addChild('Flashs', array('uri' => '#flashs'));
        $menu->addChild('Session Flashs', array('uri' => '#session-flashes'));
        $menu->addChild('Labels & Badges', array('uri' => '#labels-badges'));
        // ... add more children
        return $menu;
    }
}