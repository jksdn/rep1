<?php

/**
 * Point3D.php
 * 
 * Represents one location in 3-dimensional space
 * using an ( x, y, z ) coordinate system.
 */
class Point3D
{
    public $x;
    public $y;
    public $z;

    /**
     * use the x and y variables inherited from Point.php
     */
    public function __construct($xCoord = 0, $yCoord = 0, $zCoord = 0)
    {
        $this->x = $xCoord;
        $this->y = $yCoord;
        $this->z = $zCoord;
    }

    /**
     * the (String) representation of this Point as "Point3D(x, y, z)"
     */
    public function __toString()
    {
        return 'Point3D(x=' . $this->x . ', y=' . $this->y . ', z=' . $this->z
            . ')';
    }
}

/**
 * Line3D.php
 * 
 * Represents one Line in 3-dimensional space using two Point3D objects.
 */
class Line3D
{
    public $start;
    public $end;

    public function __construct($xCoord1 = 0, $yCoord1 = 0, $zCoord1 = 0,
        $xCoord2 = 1, $yCoord2 = 1, $zCoord2 = 1)
    {
        $this->start = new Point3D($xCoord1, $yCoord1, $zCoord1);
        $this->end = new Point3D($xCoord2, $yCoord2, $zCoord2);
    }

    /**
     * Calculate the length of this Line in 3-dimensional space.
     */
    public function getLength()
    {
        return sqrt(
            pow($this->start->x - $this->end->x, 2) +
            pow($this->start->y - $this->end->y, 2) +
            pow($this->start->z - $this->end->z, 2)
        );
    }

    /**
     * The (string) representation of this Line as "Line3D[start, end, length]".
     */
    public function __toString()
    {
        return 'Line3D[start=' . $this->start . ', end=' . $this->end .
            ', length=' . $this->getLength() . ']';
    }
}

/**
 * Create and display objects of type Line3D
 */
echo '<p>' . (new Line3D()) . '</p>\n';
echo '<p>' . (new Line3D(0, 0, 0, 100, 100, 0)) . '</p>\n';
echo '<p>' . (new Line3D(0, 0, 0, 0, 100, 100)) . '</p>\n';