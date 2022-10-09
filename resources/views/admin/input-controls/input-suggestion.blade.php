<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="theme-color" content="#2e8cc2"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><meta name="author" content="Marx JMoura"><meta name="copyright" content="Marx J. Moura"><meta name="description" content="Create input controls that gives users the option of completing words."><title>Admin 4B · Input suggestion</title><link rel="icon" href="/docs/favicon.ico"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link href="/dist/admin4b.min.css?v=2.1.0" rel="stylesheet"><link href="/docs/assets/css/custom.css" rel="stylesheet"></head><body><div class="app"><div class="app-sidebar"><div class="sidebar-header"><svg class="avatar"><use href="/docs/assets/img/faces.svg#john"/></svg><div class="username"><span>John Doe</span> <small>john_doe@email.com</small></div></div><div id="sidebar-nav" class="sidebar-nav"><ul><li><a href="/docs/index.html"><span class="sidebar-nav-icon fa fa-rocket"></span> <span class="sidebar-nav-text">Get started</span></a></li></ul><hr><span class="sidebar-nav-header">Guideline</span><ul><li><a href="#device-controls" data-toggle="collapse"><span class="sidebar-nav-icon fa fa-laptop"></span> <span class="sidebar-nav-text">Device controls</span></a><ul id="device-controls" class="collapse" data-parent="#sidebar-nav"><li><a href="/docs/pages/device-controls/camera.html">Camera</a></li><li><a href="/docs/pages/device-controls/file-manager.html">File manager</a></li></ul></li><li><a href="#forms" data-toggle="collapse"><span class="sidebar-nav-icon fa fa-pencil"></span> <span class="sidebar-nav-text">Forms</span></a><ul id="forms" class="collapse" data-parent="#sidebar-nav"><li><a href="/docs/pages/forms/basic-form.html">Basic form</a></li><li><a href="/docs/pages/forms/tabbed-form.html">Tabbed form</a></li></ul></li><li><a href="#input-controls" data-toggle="collapse"><span class="sidebar-nav-icon fa fa-pencil-square-o"></span> <span class="sidebar-nav-text">Input controls</span></a><ul id="input-controls" class="collapse" data-parent="#sidebar-nav"><li><a href="/docs/pages/input-controls/checkbox.html">Checkbox</a></li><li><a href="/docs/pages/input-controls/input-date.html">Input date</a></li><li><a href="/docs/pages/input-controls/input-suggestion.html">Input suggestion</a></li><li><a href="/docs/pages/input-controls/radio-button.html">Radio button</a></li><li><a href="/docs/pages/input-controls/toggle-switch.html">Toggle switch</a></li></ul></li><li><a href="#layout" data-toggle="collapse"><span class="sidebar-nav-icon fa fa-clone"></span> <span class="sidebar-nav-text">Layout</span></a><ul id="layout" class="collapse" data-parent="#sidebar-nav"><li><a href="/docs/pages/layout/sidebar.html">Sidebar</a></li><li><a href="/docs/pages/layout/spinner.html">Spinner</a></li><li><a href="/docs/pages/layout/table.html">Table</a></li></ul></li><li><a href="#reference" data-toggle="collapse"><span class="sidebar-nav-icon fa fa-code"></span> <span class="sidebar-nav-text">Reference</span></a><ul id="reference" class="collapse" data-parent="#sidebar-nav"><li><a href="/docs/pages/reference/callout.html">Callout</a></li><li><a href="/docs/pages/reference/code-highlight.html">Code highlight</a></li></ul></li></ul><hr><span class="sidebar-nav-header">Content</span><ul><li><a href="/docs/pages/content/chat.html"><span class="sidebar-nav-icon fa fa-comments"></span> <span class="sidebar-nav-text">Chat</span></a></li><li><a href="/docs/pages/content/dashboard.html"><span class="sidebar-nav-icon fa fa-pie-chart"></span> <span class="sidebar-nav-text">Dashboard</span></a></li><li><a href="#pages" data-toggle="collapse"><span class="sidebar-nav-icon fa fa-file"></span> <span class="sidebar-nav-text">Pages</span></a><ul id="pages" class="collapse" data-parent="#sidebar-nav"><li><a href="/docs/pages/content/blank-page.html" class="sidebar-nav-link">Blank page</a></li><li><a href="/docs/pages/content/error-404.html" class="sidebar-nav-link">Error 404</a></li><li><a href="/docs/pages/content/error-500.html" class="sidebar-nav-link">Error 500</a></li></ul></li><li><a href="/docs/pages/content/settings.html"><span class="sidebar-nav-icon fa fa-cog"></span> <span class="sidebar-nav-text">Settings</span></a></li><li><a href="/docs/pages/content/timeline.html"><span class="sidebar-nav-icon fa fa-clock-o"></span> <span class="sidebar-nav-text">Timeline</span></a></li></ul><hr><ul><li><a href="/docs/pages/content/signin.html"><span class="sidebar-nav-icon fa fa-power-off"></span> <span class="sidebar-nav-text">Log out</span></a></li></ul></div></div><div class="app-content"><div class="content-header"><nav class="navbar navbar-expand navbar-light bg-white"><div class="navbar-brand"><button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="fa fa-bars"></i></button> <span class="pr-2">Admin 4B</span> <a href="https://github.com/marxjmoura/admin4b" class="text-dark decoration-none" data-toggle="tooltip" data-placement="right" title="Fork me on GitHub"><i class="fa fa-github"></i></a></div><ul class="navbar-nav ml-auto"><li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary">3</span> <i class="fa fa-bell-o"></i></a><div class="dropdown-menu dropdown-menu-right"><a href="/docs/pages/content/notification.html" class="dropdown-item"><small class="dropdown-item-title">Lorem ipsum (today)</small><br><div>Lorem ipsum dolor sit amet...</div></a><div class="dropdown-divider"></div><a href="/docs/pages/content/notification.html" class="dropdown-item"><small class="text-muted">Lorem ipsum (yesterday)</small><br><div>Lorem ipsum dolor sit amet...</div></a><div class="dropdown-divider"></div><a href="/docs/pages/content/notification.html" class="dropdown-item"><small class="text-muted">Lorem ipsum (12/25/2017)</small><br><div>Lorem ipsum dolor sit amet...</div></a><div class="dropdown-divider"></div><a href="/docs/pages/content/notifications.html" class="dropdown-item dropdown-link">See all notifications</a></div></li></ul></nav><nav><ol class="breadcrumb"><li class="breadcrumb-item">Input controls</li><li class="breadcrumb-item">Input suggestion</li></ol></nav></div><div class="content-body"><div class="container"><h1>Input suggestion</h1><p>The <code>.input-suggestion</code> is a simple and flexible autocomplete component. You can use simple text or custom template for display the list of items. For create the list of items you may use the class <code>.list-group</code> (refer to <a href="https://getbootstrap.com/docs/4.1/components/list-group/">bootstrap documentation</a> for details).</p><h2>Operation mode</h2><p>The component has two modes of operation: static and async.</p><div class="card"><div class="card-header">Operation modes</div><div class="table-responsive"><table class="table"><thead><tr><th>Mode</th><th>Description</th></tr></thead><tbody><tr><td>static</td><td>Default mode. Used for static items and has a built-in DOM search for items in the list.</td></tr><tr><td>async</td><td>Used for dynamic items that requires DOM manipulation. This mode disable the built-in DOM search. It is setted by the attribute <code>data-async</code>.</td></tr></tbody></table></div></div><h2>Utility classes</h2><p>There are some utility classes that can be combined with <code>.list-group</code> to automate the component behavior.</p><div class="card"><div class="card-header">Utility classes</div><div class="table-responsive"><table class="table"><thead><tr><th>Class</th><th>Description</th></tr></thead><tbody><tr><td class="text-nowrap"><code>list-group empty</code></td><td>It will be automatically toggled if the list has or does not have items to display.</td></tr><tr><td class="text-nowrap"><code>list-group loading</code></td><td>Only for async mode. Displayed when the user start to typing and hidden when invoke the method <code>suggestion('refresh')</code>.</td></tr><tr><td class="text-nowrap"><code>list-group items</code></td><td>Indicates the <code>.list-group</code> that contains the selectable items.</td></tr></tbody></table></div></div><h2>Methods</h2><p>One method is available to control the input suggestion.</p><div class="card"><div class="card-header">Methods</div><div class="table-responsive"><table class="table"><thead><tr><th>Method</th><th>Description</th></tr></thead><tbody><tr><td class="text-nowrap"><code>suggestion('refresh')</code></td><td>Only for async mode. Should be triggered after DOM manipulation.</td></tr></tbody></table></div></div><h2>Events</h2><p>Events can be used by developer to interact with the component and write custom logic.</p><div class="card"><div class="card-header">Events</div><div class="table-responsive"><table class="table"><thead><tr><th>Event</th><th>Description</th></tr></thead><tbody><tr><td class="text-nowrap"><code>suggestion:change</code></td><td>Triggered when the user select a item in the list.</td></tr><tr><td class="text-nowrap"><code>suggestion:hide</code></td><td>Triggered when the user select a item in the list or the <code>input</code> loses the focus.</td></tr><tr><td class="text-nowrap"><code>suggestion:search</code></td><td>Triggered when the user end to typing.</td></tr><tr><td><code>suggestion:show</code></td><td>Triggered when the user start to typing.</td></tr></tbody></table></div></div><h2>Examples</h2><p>Follow to the next topcis for details and examples how to create the component using simple text, custom template and asynchronous items.</p><h3>Simple text</h3><p>This is the most basic way to create the component. The suggestions are displayed whenever the user start to typing in the input element, that is, when the <code>input</code> event is triggered. See the example below:</p><div class="card"><div class="card-body"><label>What juice do you like?</label><div class="input-suggestion"><input type="text" class="form-control" data-toggle="suggestion"><div class="input-suggestion-list"><div class="list-group empty"><p class="list-group-item text-muted">No results found</p></div><div class="list-group items"><a href="#" class="list-group-item list-group-item-action" tabindex="-1">Apple, carrot, and orange</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Beet, carrot, ginger, and turmeric</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Homemade tomato juice</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Orange and grapefruit</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Pumpkin seed</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Spinach, lettuce, and kale</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Strawberry and mango</a> <a href="#" class="list-group-item list-group-item-action" tabindex="-1">Strawberry-kiwi mint</a></div></div></div></div></div><div class="source-code"><a href="#input-suggestion-basic" data-toggle="collapse"><i class="fa fa-code"></i> Source code</a><div id="input-suggestion-basic" class="collapse"><pre><code class="html">&lt;div class&#x3D;&quot;card&quot;&gt;
  &lt;div class&#x3D;&quot;card-body&quot;&gt;
    &lt;label&gt;What juice do you like?&lt;/label&gt;
    &lt;div class&#x3D;&quot;input-suggestion&quot;&gt;
      &lt;input type&#x3D;&quot;text&quot; class&#x3D;&quot;form-control&quot; data-toggle&#x3D;&quot;suggestion&quot;&gt;
      &lt;div class&#x3D;&quot;input-suggestion-list&quot;&gt;
        &lt;div class&#x3D;&quot;list-group empty&quot;&gt;
          &lt;p class&#x3D;&quot;list-group-item text-muted&quot;&gt;No results found&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class&#x3D;&quot;list-group items&quot;&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Apple, carrot, and orange&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Beet, carrot, ginger, and turmeric&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Homemade tomato juice&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Orange and grapefruit&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Pumpkin seed&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Spinach, lettuce, and kale&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Strawberry and mango&lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;Strawberry-kiwi mint&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre></div></div><h3>Custom template</h3><p>You do not need to restrict yourself by using only simple text for the items of the list. You can customize like you wish.</p><p>To the component work properly you need to define what element contains the text that will be displayed in the <code>input</code> when a item of the list is selected. You can do this by setting the attribute option <code>data-text</code> with the desired element selector. See the example below:</p><div class="card"><div class="card-body"><label>What juice do you like?</label><div class="input-suggestion"><input type="text" class="form-control" data-toggle="suggestion" data-text="h5"><div class="input-suggestion-list"><div class="list-group empty"><p class="list-group-item text-muted">No results found</p></div><div class="list-group items"><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Apple, carrot, and orange</h5><small><i class="fa fa-heart-o"></i> 12</small></div><p class="mb-1">Winning combination for helping your body protect itself and fight off infections.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Beet, carrot, ginger, and turmeric</h5><small><i class="fa fa-heart-o"></i> 10</small></div><p class="mb-1">Four root vegetables that’ll help your immune system and decrease inflammatory symptoms.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Homemade tomato juice</h5><small><i class="fa fa-heart-o"></i> 8</small></div><p class="mb-1">The best way to be sure your tomato juice is fresh and without added ingredients is to make it yourself.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Orange and grapefruit</h5><small><i class="fa fa-heart-o"></i> 10</small></div><p class="mb-1">Vitamin C has antioxidant and other properties that protect your cells from substances that damage the body.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Pumpkin seed</h5><small><i class="fa fa-heart-o"></i> 12</small></div><p class="mb-1">It’s one of the freshest, most natural recipes available online. And it works as a great base for fruit smoothies.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Spinach, lettuce, and kale</h5><small><i class="fa fa-heart-o"></i> 10</small></div><p class="mb-1">A vegetable-based green juice is a powerhouse of nutrients for a strong immune system.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Strawberry and mango</h5><small><i class="fa fa-heart-o"></i> 6</small></div><p class="mb-1">The healthy way to satisfy your cravings for a bottomless brunch.</p></a><a href="#" class="list-group-item list-group-item-action" tabindex="-1"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">Strawberry-kiwi mint</h5><small><i class="fa fa-heart-o"></i> 8</small></div><p class="mb-1">Other healthy alternatives for a vitamin C-packed drink.</p></a></div></div></div></div></div><div class="source-code"><a href="#input-suggestion-advanced" data-toggle="collapse"><i class="fa fa-code"></i> Source code</a><div id="input-suggestion-advanced" class="collapse"><pre><code class="html">&lt;div class&#x3D;&quot;card&quot;&gt;
  &lt;div class&#x3D;&quot;card-body&quot;&gt;
    &lt;label&gt;What juice do you like?&lt;/label&gt;
    &lt;div class&#x3D;&quot;input-suggestion&quot;&gt;
      &lt;input type&#x3D;&quot;text&quot; class&#x3D;&quot;form-control&quot; data-toggle&#x3D;&quot;suggestion&quot; data-text&#x3D;&quot;h5&quot;&gt;
      &lt;div class&#x3D;&quot;input-suggestion-list&quot;&gt;
        &lt;div class&#x3D;&quot;list-group empty&quot;&gt;
          &lt;p class&#x3D;&quot;list-group-item text-muted&quot;&gt;No results found&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class&#x3D;&quot;list-group items&quot;&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Apple, carrot, and orange&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 12&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;Winning combination for helping your body protect itself and fight off infections.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Beet, carrot, ginger, and turmeric&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 10&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;Four root vegetables that’ll help your immune system and decrease inflammatory symptoms.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Homemade tomato juice&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 8&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;The best way to be sure your tomato juice is fresh and without added ingredients is to make it yourself.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Orange and grapefruit&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 10&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;Vitamin C has antioxidant and other properties that protect your cells from substances that damage the body.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Pumpkin seed&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 12&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;It’s one of the freshest, most natural recipes available online. And it works as a great base for fruit smoothies.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Spinach, lettuce, and kale&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 10&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;A vegetable-based green juice is a powerhouse of nutrients for a strong immune system.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Strawberry and mango&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 6&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;The healthy way to satisfy your cravings for a bottomless brunch.&lt;/p&gt;
          &lt;/a&gt;
          &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;
            &lt;div class&#x3D;&quot;d-flex w-100 justify-content-between&quot;&gt;
              &lt;h5 class&#x3D;&quot;mb-1&quot;&gt;Strawberry-kiwi mint&lt;/h5&gt;
              &lt;small&gt;&lt;i class&#x3D;&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt; 8&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class&#x3D;&quot;mb-1&quot;&gt;Other healthy alternatives for a vitamin C-packed drink.&lt;/p&gt;
          &lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre></div></div><h3>Asynchronous</h3><p>You can use simple text or custom template for async items, however the built-in DOM search is disabled.</p><p>When the user end to typing the event <code>suggestion:search</code> will be triggered. You will need to listen to this event to write your search logic, manipulate the DOM and then invoke the method <code>suggestion('refresh')</code>. See the example below:</p><div class="card"><div class="card-body"><label>What juice do you like?</label><div class="input-suggestion"><input type="text" class="form-control" data-toggle="suggestion" data-async><div class="input-suggestion-list"><div class="list-group loading"><p class="list-group-item"><em class="text-muted">Searching juices...</em></p></div><div class="list-group empty"><p class="list-group-item text-muted">No results found</p></div><div class="list-group items"><!-- Dynamically generated --><!-- <a href="#" class="list-group-item list-group-item-action" tabindex="-1"></a> --></div></div></div></div></div><div class="source-code"><a href="#input-suggestion-async" data-toggle="collapse"><i class="fa fa-code"></i> Source code</a><div id="input-suggestion-async" class="collapse"><div class="nav nav-tabs"><a href="#input-suggestion-async-html" class="active" data-toggle="tab">HTML</a> <a href="#input-suggestion-async-js" data-toggle="tab">JavaScript</a></div><div class="tab-content"><div id="input-suggestion-async-html" class="tab-pane active"><pre><code class="html">&lt;div class&#x3D;&quot;card&quot;&gt;
  &lt;div class&#x3D;&quot;card-body&quot;&gt;
    &lt;label&gt;What juice do you like?&lt;/label&gt;
    &lt;div class&#x3D;&quot;input-suggestion&quot;&gt;
      &lt;input id&#x3D;&quot;my-input&quot; type&#x3D;&quot;text&quot; class&#x3D;&quot;form-control&quot; data-toggle&#x3D;&quot;suggestion&quot; data-async&gt;
      &lt;div class&#x3D;&quot;input-suggestion-list&quot;&gt;
        &lt;div class&#x3D;&quot;list-group loading&quot;&gt;
          &lt;p class&#x3D;&quot;list-group-item text-muted&quot;&gt;Searching juices...&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class&#x3D;&quot;list-group empty&quot;&gt;
          &lt;p class&#x3D;&quot;list-group-item text-muted&quot;&gt;No results found&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class&#x3D;&quot;list-group items&quot;&gt;
          &lt;!-- Dynamically generated --&gt;
          &lt;!-- &lt;a href&#x3D;&quot;#&quot; class&#x3D;&quot;list-group-item list-group-item-action&quot; tabindex&#x3D;&quot;-1&quot;&gt;&lt;/a&gt; --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre></div><div id="input-suggestion-async-js" class="tab-pane"><pre><code class="js">$(&#x27;#my-input&#x27;).on(&#x27;suggestion:search&#x27;, function () {
    // Your magic
    $input.suggestion(&#x27;refresh&#x27;);
});
</code></pre></div></div></div></div></div></div></div></div><script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script><script src="/dist/admin4b.min.js?v=2.1.0"></script><script src="/docs/assets/js/docs.js"></script></body></html>