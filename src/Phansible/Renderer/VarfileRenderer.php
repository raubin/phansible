<?php
/**
 * Var File renderer
 */

namespace Phansible\Renderer;

class VarfileRenderer extends TemplateRenderer
{
    /** @var  array Variables key-value format */
    protected $data;

    /** @var  string Varfile name */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function loadDefaults()
    {
        $this->setTemplate('vars.yml.twig');
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return [ 'variables' => $this->data ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFilePath()
    {
        return 'ansible/vars/' . $this->getName() . '.yml';
    }
}
