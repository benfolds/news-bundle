<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// This file is not used in Contao. Its only purpose is to make PHP IDEs like
// Eclipse, Zend Studio or PHPStorm realize the class origins, since the dynamic
// class aliasing we are using is a bit too complex for them to understand.

namespace  {
	class News extends \Contao\News {}
	class NewsArchiveModel extends \Contao\NewsArchiveModel {}
	class NewsFeedModel extends \Contao\NewsFeedModel {}
	class NewsModel extends \Contao\NewsModel {}
	abstract class ModuleNews extends \Contao\ModuleNews {}
	class ModuleNewsArchive extends \Contao\ModuleNewsArchive {}
	class ModuleNewsList extends \Contao\ModuleNewsList {}
	class ModuleNewsMenu extends \Contao\ModuleNewsMenu {}
	class ModuleNewsReader extends \Contao\ModuleNewsReader {}
}
