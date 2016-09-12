<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase{

        function test_makeTitleCase_oneWord(){
          //Arrange
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "beowulf";

          //Act
          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          //Assert
          $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            // Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "jurrasic park";

            // Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            // Assert
            $this->assertEquals("Jurrasic Park", $result);
        }

        function test_makeTitleCase_exceptions()
        {
        // Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "beauty and the beast";

        // Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        // Assert
        $this->assertEquals("Beauty and the Beast", $result);
        }
      }
 ?>
