<?php
 /******************************************************************************
 * Copyright (c) 06/06/13 Kaspar Bach Pedersen.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Kaspar Bach Pedersen - initial API and implementation and/or initial 
 *                           documentation
 ******************************************************************************/

namespace App\Views\Examples;

use \Phoriz\Annotations\Route;

/**
 * @Route("examples/")
 * @Route("examples")
 * @Route("examples/basic")
 * @Route("examples/basic/")
 */
class Basic extends BaseExample
{
    public function __construct()
    {
        parent::__construct('Basics', 0);
    }

    /**
     * @param array $context
     * @return string|null
     */
    public function onRender($context)
    {
        echo $this->renderTemplate('Examples/Basic.twig', $context);
    }
}