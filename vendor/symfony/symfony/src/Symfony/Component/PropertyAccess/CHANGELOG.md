CHANGELOG
=========

2.5.0
------

 * allowed non alpha numeric characters in second level and deeper object properties names

2.3.0
------

 * added PropertyAccessorBuilder, to enable or disable the support of "__call"
 * added support for "__call" in the PropertyAccessor (disabled by default)
 * [BC BREAK] changed PropertyAccessor to continue its search for a property or
   method even if a non-public match was found. Before, a PropertyAccessDeniedException
   was thrown in this case. Class PropertyAccessDeniedException was removed
   now.
 * deprecated PropertyAccess::getPropertyAccessor
 * added PropertyAccess::createPropertyAccessor and PropertyAccess::createPropertyAccessorBuilder