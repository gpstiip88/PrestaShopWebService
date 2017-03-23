<?php
namespace pshopws;

/**
 * @author Marcos Redondo <kusflo at gmail.com>
 */
class PShopWsProducts extends PShopWs
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $options['resource'] = 'products';
        $options['display'] = 'full';
        $objects = $this->get($options);
        return ServiceSimpleXmlToArray::takeMultiple($objects->products->product);
    }

    public function getById($id)
    {
        $options['resource'] = 'products';
        $options['id'] = $id;
        $objects = $this->get($options);
        return ServiceSimpleXmlToArray::take($objects->product);
    }
}