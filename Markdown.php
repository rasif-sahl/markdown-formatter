<?php

#
#
# Markdown
# https://github.com/rasif-sahl/markdown-formater
#
# rasif-sahl
#
#
#

class Markdown
{
    # ~
    const version = '1';
    # ~

    function text($text)
    {
        $Element = $this->textElement($text);

        #convert to markup
        $markup = $this->element($Element);

        # trim line breaks
        $markup = trim($markup, "\n");

        return $markup;
    }

    protected function textElement($text)
    {
        # make sure no definitions are set.
        $this->DefinitionData = array();

        # standardize line break
        $text = str_replace(array("\r\n", "\r"), "\n", $text);

        #remove surrounding line breaks.
        $text = trim($text, "\n");
        
        #split text into lines
        $lines = explode("\n", $text);

        # iterate through lines to identify the blocks
        return $this-> linesElements($lines);
    }

    #
    # Setters
    #


    #
    # Lines
    #

    #
    # Code
    #

    # 
    # Comment 
    #

    # 
    # Fenced Code 
    #

    # 
    # Header 
    #

    # 
    # List 
    #

    # 
    # Quote 
    #

    # 
    # Rule 
    #

    # 
    # seText 
    #

    # 
    # Markup 
    #

    # 
    # Reference 
    #

    # 
    # Table 
    #

    # 
    # Inline Elements 
    #

    #
    # Handlers
    #

    #
    # AST Convenience
    #

    #
    # Deprecated Methods
    #

    #
    # Static Methods
    #

    #
    # Fields
    #

    #
    # Read-Only

}