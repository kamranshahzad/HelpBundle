<?php

namespace Kamran\HelpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 *  HelpController
 * @Route("/help")
*/
class HelpController extends Controller{

    /**
     * @Route("/", name="help_index")
     * @Template()
     */
    public function indexAction(Request $request){

        $help_text = '';

        $helper = $this->get('base.helper');
        //$src = $this->container->getParameter('web_loc').'/md/docs/organizations_help.md';
        //$src2 = $helper->fileLoc->locate('@CogilentUserBundle/Resources/docs/organizations_help.md');


        $helpFiles = array(
            'user_help' => 'user_help.md',
            'userrole_help' => 'userrole_help.md',
            'rolepermissions_help' => 'rolepermissions_help.md',
            'organization_help' => 'organization_help.md',
            'contacts_help' => 'contacts_help.md',
            'settings_help' => 'settings_help.md',
        );


        $locator   = $this->get('file_locator');

        foreach($helpFiles  as $fileId => $mdFile){
            $formfile = $locator->locate('@CogilentHelpBundle/Resources/public/docs/'.$mdFile);
        }







        //$src = $helper->webDir2.'/md/docs/organizations_help.md';
        //echo('<h4>------------------>'.$src.'</h4>');

        //$help_text = $parser->parse($text);

        /*if(file_exists($src)) {
            $text =	file_get_contents($src);
            $parser = new \cebe\markdown\Markdown();
            $help_text = sprintf('<script id="page-template" type="text/x-handlebars-template">%s</script>', $parser->parse($text));
        }*/


        return array(
            'links' => $config->getLinks(),
            'help_text'=> $help_text
        );




        /*return array(
          'links' => $config->getLinks(),
          'templates' => $config->getHelpTemplates(),
          'help_text'=> $help_text
        );*/



        /*
        $user = $this->get('security.context')->getToken()->getUser();

        $helper = $this->get('base.helper');
        $src = $helper->webDir2.'/bundles/cogilentuser/docs/organizations_help.md';

        $output = '';

        if(file_exists($src)){
          $text =	@file_get_contents($src);
        */

          //$parser = new \cebe\markdown\Markdown();
          //$parser = new \Cogilent\FrontBundle\Helper\MyMarkdown();
          //$output = $parser->parse($text);



          //echo($output);
          //this will create output

          //echo("<h1> -----> File exists </h1>");
        //}
        //echo('Output:'.$src);

        //return array('result'=>$output);

        /*
        $testEmail = 'm_kamranshahzad@hotmail.com';
        $myemail   = 'kamran@cogilent.com';
        $response = EmailUtils::verifyEmail($testEmail,$myemail, true);
        if(is_array($response)){
            echo('<pre>');
            print_r($response);
            echo('</pre>');
        }
        echo($response);
        */


        //echo 'Email:'.$user->getEmail();
        //echo "index";
        //print_r($user->getRoles());

        /*foreach($user->getRoles() as $role){
            echo $role->getName().'</br>';
        }*/


    }




}//@
