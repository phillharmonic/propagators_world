<?php
namespace PpgwBundle\Helpers;

/**
 * Highlights Twig code provided in a html.twig file
 * Can be passed from the controller to the twig; then inside the twig use:
 * 
<div class="highlight"><pre><code>
{{ file_name|raw }}
<code></pre></div>
 *
 * use symblog.css
 * @author Patrick
 */
    
class TwigHighlighter {
    
    protected $result;
    
    public function result(){
        return $this->result;
    }
    public function __toString()
    {
        return $this->result();
    }

    public function highlightPhpFile($file_path){
        $phpFile = $this->replaceSyntax(file_get_contents($file_path));
        $phpFile = $this->replaceReplacedSyntaxAndHighlight($phpFile);
        //convert result to string:
        $this->result = $phpFile;
        return $this->result;
    }
    
    public function highlightTwigFile($file_path, $array = null ){
        //convert the string's syntax that need to be changed last:
        $codedCss = $this->replaceSyntax(file_get_contents($file_path));
        //convert the string's tags:
        $codedCss = $this->highlightTags($codedCss);
        //convert the string's attributes:
        $codedCss = $this->highlightAttributes($codedCss);
        //convert the string's twig:
        $codedCss = $this->highlightTwig($codedCss);
        //convert the string's replaced syntax:
        $codedCss = $this->replaceReplacedSyntaxAndHighlight($codedCss);
        if(!is_null($array)){
            $codedCss = $this->highlightUserDefinedStrings($codedCss, $array);
        }
        //convert result to string:
        $this->result = $codedCss;
        return $this->result;
    }
    
    private function sortedArray($patterns, $replacements, $string){
        ksort($patterns);
        ksort($replacements);
        return preg_replace($patterns, $replacements, $string);
    }

    public function replaceSyntax($string){
        $patterns = $replacements = array();
        //Patterns
            $patterns[] = '/(span)/i';              //  span
            $patterns[] = '/(class=)/i';            //  class=        
            $patterns[] = '/(\/>)/i';               //  />
            $patterns[] = '/(<\/)/i';               //  </
            $patterns[] = '/(<)/i';                 //  <
            $patterns[] = '/(>)/i';                 //  >
            $patterns[] = '/(")/i';                 //  "
            $patterns[] = '/(\')/i';                //  '
            $patterns[] = '/({%)/i';                //  {%
            $patterns[] = '/(%})/i';                //  %}
            $patterns[] = '/({{)/i';                //  {{
            $patterns[] = '/(}})/i';                //  }}
            $patterns[] = '/({#)/i';                //  {#
            $patterns[] = '/(#})/i';                //  #}
            $patterns[] = '/(\(\))/i';              //  ()
            $patterns[] = '/(\|)/i';                 //  |
        //Replacements:
            $replacements[] = 'naps';                           //  span
            $replacements[] = 'ssalc=';                         //  class=
            $replacements[] = 'close_opentag';                  //  />
            $replacements[] = 'open_closetag';                  //  </
            $replacements[] = 'open_tag';                       //  <
            $replacements[] = 'close_tag';                      //  >
            $replacements[] = 'parenthesis';                    //  "
            $replacements[] = 'quote';                          //  '
            $replacements[] = '<span class="br">{%</span>';     //  {%
            $replacements[] = '<span class="br">%}</span>';     //  %}
            $replacements[] = '<span class="br">{{</span>';     //  {{
            $replacements[] = '<span class="br">}}</span>';     //  }}
            $replacements[] = '<span class="w">{#';             //  {#
            $replacements[] = '#}</span>';                      //  #}
            $replacements[] = '<span class="lb">()</span>';     //  ()
            $replacements[] = '<span class="lb">&#124;</span>';      //  |
            
            return $this->sortedArray($patterns, $replacements, $string);
    }
    
    public function highlightTags($string){
        $patterns = $replacements = array();
        //Patterns
            $patterns[] = '/(open_tagdiv)/i';       //  div
            $patterns[] = '/(open_closetagdiv)/i';  //  div
            $patterns[] = '/(open_taga)/i';         //  a
            $patterns[] = '/(open_closetaga)/i';    //  a
            $patterns[] = '/(open_tagp)/i';         //  p
            $patterns[] = '/(open_closetagp)/i';    //  p
            $patterns[] = '/(open_tagul)/i';        //  ul
            $patterns[] = '/(open_closetagul)/i';   //  ul
            $patterns[] = '/(open_taglink)/i';      //  link
            $patterns[] = '/(open_closetaglink)/i'; //  link
            $patterns[] = '/(open_tagli)/i';        //  li
            $patterns[] = '/(open_closetagli)/i';   //  li
            $patterns[] = '/(open_tagform)/i';      //  form
            $patterns[] = '/(open_closetagform)/i'; //  form
            $patterns[] = '/(open_tagimg)/i';       //  img
            $patterns[] = '/(open_closetagimg)/i';  //  img
            $patterns[] = '/(open_taginput)/i';     //  input
            $patterns[] = '/(open_closetaginput)/i';//  input
            $patterns[] = '/(open_tagh1)/i';        //  h1
            $patterns[] = '/(open_closetagh1)/i';   //  h1
            $patterns[] = '/(open_tagh2)/i';        //  h2
            $patterns[] = '/(open_closetagh2)/i';   //  h2
            $patterns[] = '/(open_tagh3)/i';        //  h3
            $patterns[] = '/(open_closetagh3)/i';   //  h3
            $patterns[] = '/(open_tagh4)/i';        //  h4
            $patterns[] = '/(open_closetagh4)/i';   //  h4
            $patterns[] = '/(open_tagh5)/i';        //  h5
            $patterns[] = '/(open_closetagh5)/i';   //  h5
            $patterns[] = '/(open_tagh6)/i';        //  h6
            $patterns[] = '/(open_closetagh6)/i';   //  h6
            $patterns[] = '/(open_tagh7)/i';        //  h7
            $patterns[] = '/(open_closetagh7)/i';   //  h7
            $patterns[] = '/(open_taglabel)/i';     //  label
            $patterns[] = '/(open_closetaglabel)/i';//  label
            $patterns[] = '/(open_tagfieldset)/i';      //  fieldset
            $patterns[] = '/(open_closetagfieldset)/i'; //  fieldset
            $patterns[] = '/(open_tagsection)/i';       //  section
            $patterns[] = '/(open_closetagsection)/i';  //  section
            $patterns[] = '/(open_tagscript)/i';        //  script
            $patterns[] = '/(open_closetagscript)/i';   //  script
        //Replacements:
            $replacements[] = '<span class="bl">open_tagdiv</span>';        //  div
            $replacements[] = '<span class="bl">open_closetagdiv</span>';   //  div
            $replacements[] = '<span class="bl">open_taga</span>';          //  a
            $replacements[] = '<span class="bl">open_closetaga</span>';     //  a
            $replacements[] = '<span class="bl">open_tagp</span>';          //  p
            $replacements[] = '<span class="bl">open_closetagp</span>';     //  p
            $replacements[] = '<span class="bl">open_tagul</span>';         //  ul
            $replacements[] = '<span class="bl">open_closetagul</span>';    //  ul
            $replacements[] = '<span class="bl">open_taglink</span>';       //  link
            $replacements[] = '<span class="bl">open_closetaglink</span>';  //  link
            $replacements[] = '<span class="bl">open_tagli</span>';         //  li
            $replacements[] = '<span class="bl">open_closetagli</span>';    //  li
            $replacements[] = '<span class="bl">open_tagform</span>';       //  form
            $replacements[] = '<span class="bl">open_closetagform</span>';  //  form
            $replacements[] = '<span class="bl">open_tagimg</span>';        //  img
            $replacements[] = '<span class="bl">open_closetagimg</span>';   //  img
            $replacements[] = '<span class="bl">open_taginput</span>';      //  input
            $replacements[] = '<span class="bl">open_closetaginput</span>'; //  input
            $replacements[] = '<span class="bl">open_tagh1</span>';         //  h1
            $replacements[] = '<span class="bl">open_closetagh1</span>';    //  h1
            $replacements[] = '<span class="bl">open_tagh2</span>';         //  h2
            $replacements[] = '<span class="bl">open_closetagh2</span>';    //  h2        
            $replacements[] = '<span class="bl">open_tagh3</span>';         //  h3
            $replacements[] = '<span class="bl">open_closetagh3</span>';    //  h3        
            $replacements[] = '<span class="bl">open_tagh4</span>';         //  h4
            $replacements[] = '<span class="bl">open_closetagh4</span>';    //  h4        
            $replacements[] = '<span class="bl">open_tagh5</span>';         //  h5
            $replacements[] = '<span class="bl">open_closetagh5</span>';    //  h5       
            $replacements[] = '<span class="bl">open_tagh6</span>';         //  h6
            $replacements[] = '<span class="bl">open_closetagh6</span>';    //  h6      
            $replacements[] = '<span class="bl">open_tagh7</span>';         //  h7
            $replacements[] = '<span class="bl">open_closetagh7</span>';    //  h7  
            $replacements[] = '<span class="bl">open_taglabel</span>';      //  label
            $replacements[] = '<span class="bl">open_closetaglabel</span>'; //  label
            $replacements[] = '<span class="bl">open_tagfieldset</span>';      //  fieldset
            $replacements[] = '<span class="bl">open_closetagfieldset</span>'; //  fieldset
            $replacements[] = '<span class="bl">open_tagsection</span>';      //  section
            $replacements[] = '<span class="bl">open_closetagsection</span>'; //  section
            $replacements[] = '<span class="bl">open_tagscript</span>';      //  script
            $replacements[] = '<span class="bl">open_closetagscript</span>'; //  script
            
            return $this->sortedArray($patterns, $replacements, $string);
    }
    
    public function highlightAttributes($string){
        $patterns = $replacements = array();
        //Patterns
            $patterns[] = '/(href=)/i';             //  href=
            $patterns[] = '/(type=)/i';             //  type=
            $patterns[] = '/(id=)/i';               //  id=
            $patterns[] = '/(name=)/i';             //  name=
            $patterns[] = '/(style=)/i';            //  style=
            $patterns[] = '/(rel=)/i';              //  rel=
            $patterns[] = '/(action=)/i';           //  action=
            $patterns[] = '/(method=)/i';           //  method=
            $patterns[] = '/(placeholder=)/i';      //  placeholder=
            $patterns[] = '/(for=)/i';              //  for=
            $patterns[] = '/(value=)/i';            //  value=
            $patterns[] = '/(src=)/i';              //  src=
            $patterns[] = '/(checked=)/i';          //  checked=
            $patterns[] = '/(target=)/i';           //  target=
            $patterns[] = '/(height=)/i';           //  height=
            $patterns[] = '/(width=)/i';            //  width=
        //Replacements:
            $replacements[] = '<span class="gr">href=</span>';              //  href=
            $replacements[] = '<span class="gr">type=</span>';              //  type=
            $replacements[] = '<span class="gr">id=</span>';                //  id=
            $replacements[] = '<span class="gr">name=</span>';              //  name=
            $replacements[] = '<span class="gr">style=</span>';             //  style=
            $replacements[] = '<span class="gr">rel=</span>';               //  rel=
            $replacements[] = '<span class="gr">action=</span>';            //  action=
            $replacements[] = '<span class="gr">method=</span>';            //  method=
            $replacements[] = '<span class="gr">placeholder=</span>';       //  placeholder=
            $replacements[] = '<span class="gr">for=</span>';               //  for=
            $replacements[] = '<span class="gr">value=</span>';             //  value=
            $replacements[] = '<span class="gr">src=</span>';               //  src=
            $replacements[] = '<span class="gr">checked=</span>';           //  checked=
            $replacements[] = '<span class="gr">target=</span>';            //  target=
            $replacements[] = '<span class="gr">height=</span>';            //  height=
            $replacements[] = '<span class="gr">width=</span>';             //  width=
            
            return $this->sortedArray($patterns, $replacements, $string);
    }
    
    public function highlightTwig($string){
        $patterns = $replacements = array();
        //Patterns
            $patterns[] = '/({%<\/span> extends)/i';        //  extends
            $patterns[] = '/({%<\/span> block)/i';          //  block
            $patterns[] = '/({%<\/span> endblock)/i';       //  endblock
            $patterns[] = '/({%<\/span> if)/i';             //  if
            $patterns[] = '/({%<\/span> endif)/i';          //  endif
            $patterns[] = '/({%<\/span> for\s)/i';          //  for
            $patterns[] = '/({%<\/span> endfor)/i';         //  endfor
            $patterns[] = '/({%<\/span> else)/i';           //  else
            $patterns[] = '/(if<\/span>\s\w+.\w+?\sis)/i';  //  is
            $patterns[] = '/(isis)/i';                      //  is
            $patterns[] = '/(<span class="lb">is<\/span>\snot)/i';      //  is not
            $patterns[] = '/(notnot)/i';                                //  is not
            $patterns[] = '/(for\s<\/span>+.\w+?\sin)/i'; //  in
            $patterns[] = '/(inin)/i';                      //  in
            $patterns[] = '/({%<\/span> spaceless)/i';      //  spaceless
            $patterns[] = '/({%<\/span> endspaceless)/i';   //  endspaceless
            $patterns[] = '/(!=)/i';                        //  !=
            $patterns[] = '/(== true)/i';                   //  == true
        //Replacements:
            $replacements[] = '{%</span> <span class="lb">extends</span>';  //  extends
            $replacements[] = '{%</span> <span class="lb">block</span>';    //  block
            $replacements[] = '{%</span> <span class="lb">endblock</span>'; //  endblock
            $replacements[] = '{%</span> <span class="lb">if</span>';       //  if
            $replacements[] = '{%</span> <span class="lb">endif</span>';    //  endif
            $replacements[] = '{%</span> <span class="lb">for </span>';      //  for
            $replacements[] = '{%</span> <span class="lb">endfor</span>';   //  endfor
            $replacements[] = '{%</span> <span class="lb">else</span>';     //  else
            $replacements[] = '$0is';                                       //  is
            $replacements[] = '<span class="lb">is</span>';                 //  is
            $replacements[] = '$0not';                                      //  is not
            $replacements[] = '<span class="lb">not</span>';                //  is not
            $replacements[] = '$0in';                                       //  in
            $replacements[] = '<span class="lb">in</span>';                 //  in
            $replacements[] = '{%</span> <span class="lb">spaceless</span>';//  spaceless
            $replacements[] = '{%</span> <span class="lb">endspaceless</span>';//  endspaceless
            $replacements[] = '<span class="lb">!=</span>';                 //  !=
            $replacements[] = '<span class="lb">== true</span>';                 //  == true
            
            return $this->sortedArray($patterns, $replacements, $string);
    }    
    
    public function replaceReplacedSyntaxAndHighlight($string){
        $patterns = $replacements = array();
        //Patterns
            //Always call these last:
                $patterns[] = '/(close_opentag)/i';     //  />
                $patterns[] = '/(open_closetag)/i';     //  </
                $patterns[] = '/(open_tag)/i';          //  <
                $patterns[] = '/(close_tag)/i';         //  >
                $patterns[] = '/(parenthesis)/i';       //  "
                $patterns[] = '/(quote)/i';             //  '
                $patterns[] = '/(ssalc=)/i';            //  class=
                $patterns[] = '/(naps)/i';              //  span
        //Replacements:
            //Always call these last:
                $replacements[] = '<span class="bl">&#47;&#62;</span>';                 //  />
                $replacements[] = '<span class="bl">&#60;&#47;</span>';                 //  </
                $replacements[] = '<span class="bl">&#60;</span>';                      //  <
                $replacements[] = '<span class="bl">&#62;</span>';                      //  >
                $replacements[] = '<span class="ng">&#34;</span>';                      //  "
                $replacements[] = '<span class="ng">&#39;</span>';                      //  '
                $replacements[] = '<span class="gr">class=</span>';                     //  class=
                $replacements[] = '<span class="bl">&#115;&#112;&#97;&#110;</span>';    //  span
            
            return $this->sortedArray($patterns, $replacements, $string);
    }    
    
    public function highlightUserDefinedStrings($string, $array){
        $patterns = $replacements = array();
        //Patterns
            foreach($array as $option){
                $patterns[] = '|('.$option.')|i';              
            }
        //Replacements:
            foreach($array as $option){
                $replacements[] = '<span class="mustard">'.$option.'</span>';    
            }
        return $this->sortedArray($patterns, $replacements, $string);
    }
}
