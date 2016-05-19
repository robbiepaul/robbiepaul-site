<li><a href="{{ '/' }}" class="{{ request()->segment(1) == null ? 'active' : '' }}">Home</a></li>
<li><a href="{{ '/about' }}" class="{{ request()->segment(1) == 'about' ? 'active' : '' }}">About</a></li>
<li><a href="{{ '/blog' }}" class="{{ request()->segment(1) == 'blog' ? 'active' : '' }}">Blog</a></li>
<li><a href="{{ '/skills' }}" class="{{ request()->segment(1) == 'skills' ? 'active' : '' }}">Skills</a></li>
<li><a href="{{ '/projects' }}" class="{{ request()->segment(1) == 'projects' ? 'active' : '' }}">Projects</a></li>
<li><a href="{{ '/contact' }}" class="{{ request()->segment(1) == 'contact' ? 'active' : '' }}">Contact</a></li>