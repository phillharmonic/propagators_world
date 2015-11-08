<?php
namespace PpgwBundle\Helpers;
/**
 * Description of helper
 *
 * @author Patrick
 */
class Helper {
    
    public static function highlight_twig($file_path, $options_array=null){
        $file_to_string = file_get_contents($file_path);
        $patterns = $replacements = array();

    //Patterns:
        //syntax
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
        //tags
        $patterns[] = '/(open_tagdiv)/i';       //  div
        $patterns[] = '/(open_closetagdiv)/i';  //  div
        $patterns[] = '/(open_taga)/i';         //  a
        $patterns[] = '/(open_closetaga)/i';    //  a
        $patterns[] = '/(open_tagul)/i';        //  ul
        $patterns[] = '/(open_closetagul)/i';   //  ul
        $patterns[] = '/(open_taglink)/i';      //  link
        $patterns[] = '/(open_closetaglink)/i'; //  link
        $patterns[] = '/(open_tagli)/i';        //  li
        $patterns[] = '/(open_closetagli)/i';   //  li
        $patterns[] = '/(open_tagform)/i';      //  form
        $patterns[] = '/(open_closetagform)/i'; //  form
        $patterns[] = '/(open_taginput)/i';     //  input
        $patterns[] = '/(open_closetaginput)/i';//  input
        $patterns[] = '/(open_tagh1)/i';        //  h1
        $patterns[] = '/(open_closetagh1)/i';   //  h1
        $patterns[] = '/(open_tagh2)/i';        //  h2
        $patterns[] = '/(open_closetagh2)/i';   //  h2
        $patterns[] = '/(open_tagh3)/i';        //  h3
        $patterns[] = '/(open_closetagh3)/i';   //  h3
        $patterns[] = '/(open_taglabel)/i';     //  label
        $patterns[] = '/(open_closetaglabel)/i';//  label
        //attributes
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
        //twig
        $patterns[] = '/({%<\/span> extends)/i';    //  extends
        $patterns[] = '/({%<\/span> block)/i';      //  block
        $patterns[] = '/({%<\/span> endblock)/i';   //  endblock
        $patterns[] = '/({%<\/span> if)/i';         //  if
        $patterns[] = '/({%<\/span> endif)/i';      //  endif
        $patterns[] = '/({%<\/span> for)/i';        //  for
        $patterns[] = '/({%<\/span> endfor)/i';     //  endfor
        $patterns[] = '/(if<\/span>\s\w+.\w+?\sis)/i';      //  is
        $patterns[] = '/(isis)/i';                          //  is
        $patterns[] = '/(for<\/span>\s\w+.\w+?\sin)/i';     //  in
        $patterns[] = '/(inin)/i';                          //  in
        
        //Always call these last:
        $patterns[] = '/(close_opentag)/i';     //  />
        $patterns[] = '/(open_closetag)/i';     //  </
        $patterns[] = '/(open_tag)/i';          //  <
        $patterns[] = '/(close_tag)/i';         //  >
        $patterns[] = '/(parenthesis)/i';       //  "
        $patterns[] = '/(quote)/i';             //  '
        $patterns[] = '/(ssalc=)/i';            //  class=
        $patterns[] = '/(naps)/i';              //  span
        if(!is_null($options_array)){
        foreach($options_array as $options){
            $patterns[] = '/('.$options.')/i';              
        }}

    //Replacements:
        //syntax
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
        //tags
        $replacements[] = '<span class="bl">open_tagdiv</span>';        //  div
        $replacements[] = '<span class="bl">open_closetagdiv</span>';   //  div
        $replacements[] = '<span class="bl">open_taga</span>';          //  a
        $replacements[] = '<span class="bl">open_closetaga</span>';     //  a
        $replacements[] = '<span class="bl">open_tagul</span>';         //  ul
        $replacements[] = '<span class="bl">open_closetagul</span>';    //  ul
        $replacements[] = '<span class="bl">open_taglink</span>';       //  link
        $replacements[] = '<span class="bl">open_closetaglink</span>';  //  link
        $replacements[] = '<span class="bl">open_tagli</span>';         //  li
        $replacements[] = '<span class="bl">open_closetagli</span>';    //  li
        $replacements[] = '<span class="bl">open_tagform</span>';       //  form
        $replacements[] = '<span class="bl">open_closetagform</span>';  //  form
        $replacements[] = '<span class="bl">open_taginput</span>';      //  input
        $replacements[] = '<span class="bl">open_closetaginput</span>'; //  input
        $replacements[] = '<span class="bl">open_tagh1</span>';         //  h1
        $replacements[] = '<span class="bl">open_closetagh1</span>';    //  h1
        $replacements[] = '<span class="bl">open_tagh2</span>';         //  h2
        $replacements[] = '<span class="bl">open_closetagh2</span>';    //  h2        
        $replacements[] = '<span class="bl">open_tagh3</span>';         //  h3
        $replacements[] = '<span class="bl">open_closetagh3</span>';    //  h3
        $replacements[] = '<span class="bl">open_taglabel</span>';      //  label
        $replacements[] = '<span class="bl">open_closetaglabel</span>'; //  label
        //attributes
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
        //twig
        $replacements[] = '{%</span> <span class="lb">extends</span>';  //  extends
        $replacements[] = '{%</span> <span class="lb">block</span>';    //  block
        $replacements[] = '{%</span> <span class="lb">endblock</span>'; //  endblock
        $replacements[] = '{%</span> <span class="lb">if</span>';       //  if
        $replacements[] = '{%</span> <span class="lb">endif</span>';    //  endif
        $replacements[] = '{%</span> <span class="lb">for</span>';      //  for
        $replacements[] = '{%</span> <span class="lb">endfor</span>';   //  endfor
        $replacements[] = '$0is';                                       //  is
        $replacements[] = '<span class="lb">is</span>';                 //  is
        $replacements[] = '$0in';                                       //  in
        $replacements[] = '<span class="lb">in</span>';                 //  in
        
        //Always call these last:
        $replacements[] = '<span class="bl">&#47;&#62;</span>'; //  />
        $replacements[] = '<span class="bl">&#60;&#47;</span>'; //  </
        $replacements[] = '<span class="bl">&#60;</span>';      //  <
        $replacements[] = '<span class="bl">&#62;</span>';      //  >
        $replacements[] = '<span class="ng">&#34;</span>';      //  "
        $replacements[] = '<span class="ng">&#39;</span>';      //  '
        $replacements[] = '<span class="gr">class=</span>';     //  class=
        $replacements[] = '<span class="bl">&#115;&#112;&#97;&#110;</span>';       //  span
        if(!is_null($options_array)){
        foreach($options_array as $options){
            $stripped_values = preg_replace('/(\\\)/i','',$options);
            $replacements[] = '<span class="mustard">'.$stripped_values.'</span>';              
        }}

        ksort($patterns);
        ksort($replacements);

        return preg_replace($patterns, $replacements, $file_to_string);
    }
}
