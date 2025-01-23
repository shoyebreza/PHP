<?php 

class RGB {

    private $color;
    private $red;
    private $green;
    private $blue;

    // Constructor with optional color code initialization
    public function __construct($colorCode = '') {
        $this->setColor($colorCode); // Set color and parse it
    }

    // Getter for the color code
    public function getColor() {
        return $this->color;
    }

    // Setter for the color code
    public function setColor($colorCode) {
        $this->color = ltrim($colorCode, "#"); // Remove '#' if present
        $this->parseColor(); // Parse the color into RGB
    }

    // Parse the hexadecimal color code into RGB values
    private function parseColor() {
        if ($this->color && strlen($this->color) === 6) { // Ensure valid hex length
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        } else {
            $this->red = $this->green = $this->blue = 0; // Default to black on invalid input
        }
    }

    // Get individual RGB values
    public function getRGB() {
        return [
            'red' => $this->red,
            'green' => $this->green,
            'blue' => $this->blue
        ];
    }

    // Print RGB values for debugging
    public function printRGB() {
        echo "Red: {$this->red}, Green: {$this->green}, Blue: {$this->blue}\n";
    }
}

// Example usage
$myColor = new RGB('#ffef27'); // Initialize with a color
$myColor->printRGB();          // Output: Red: 255, Green: 239, Blue: 39
print_r($myColor->getRGB());   // Output: Array ( [red] => 255 [green] => 239 [blue] => 39 )

?>
