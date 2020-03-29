<?php

/**
 * This file is part of Battleground package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\Bic\Application;

use Serafim\SDL\SDL;
use Serafim\SDLImage\Image;

/**
 * Class DirectMediaServiceProvider
 */
class DirectMediaServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $sdl = SDL::getInstance();
        $sdl->init(SDL::SDL_INIT_VIDEO | SDL::SDL_INIT_AUDIO);

        $this->app->instance(SDL::class, $sdl);


        $image = Image::getInstance();
        $image->init(Image::IMG_INIT_PNG);
        $this->app->instance(Image::class, $image);
    }
}
