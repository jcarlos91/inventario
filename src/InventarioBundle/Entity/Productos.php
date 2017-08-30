<?php

namespace InventarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\ProductosRepository")
 */
class Productos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="producto", type="string", length=150)
     */
    private $producto;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var int
     *
     * @ORM\Column(name="enStock", type="integer")
     */
    private $enStock;

    /**
     * @var \InventarioBundle\Entity\Proveedores
     *
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\Proveedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proveedor", referencedColumnName="id")
     * })
     */
    private $proveedor;

    /**
     * @var float
     *
     * @ORM\Column(name="precioVta", type="float")
     */
    private $precioVta;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set producto
     *
     * @param string $producto
     *
     * @return Productos
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return string
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Productos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set enStock
     *
     * @param integer $enStock
     *
     * @return Productos
     */
    public function setEnStock($enStock)
    {
        $this->enStock = $enStock;

        return $this;
    }

    /**
     * Get enStock
     *
     * @return int
     */
    public function getEnStock()
    {
        return $this->enStock;
    }

    /**
     * Set proveedor
     *
     * @param \InventarioBundle\Entity\Proveedores $proveedor
     *
     * @return Productos
     */
    public function setProveedor(\InventarioBundle\Entity\Proveedores $proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \InventarioBundle\Entity\Proveedores
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set precioVta
     *
     * @param float $precioVta
     *
     * @return Productos
     */
    public function setPrecioVta($precioVta)
    {
        $this->precioVta = $precioVta;

        return $this;
    }

    /**
     * Get precioVta
     *
     * @return float
     */
    public function getPrecioVta()
    {
        return $this->precioVta;
    }
}

