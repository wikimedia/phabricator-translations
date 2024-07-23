<?php

final class PhabricatorSearchZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'No results.' => '没有结果。',
      'This menu item is very important, and can not be disabled.' => '此菜单项非常重要，并且不能禁用。',
      'Enable Query?' => '启用查询？',
      'Personal Menu Items' => '个人菜单项',
      'Format' => '格式',
      'The queries you have saved are private. Only you can view or edit them.' => '您保存的查询为私有查询。只有您可以查看或编辑。',
      'cat -A can find mice hiding in files.' => '猫-A可以找到隐藏在文件中的老鼠。',
      'Export Format Not Available' => '导出格式不可用',
      'Readable' => '可读',
      'Search Engines' => '搜索引擎',
      'Form "%s" is not a valid form which you have permission to see.' => '表单“%s”不是您有权限查看的有效表单。',
      'Reset all common ngram records.' => '重置所有常用ngram记录。',
      'N/A' => '不可用',
      'You must choose a room.' => '您必须选择一个房间。',
      'Disable Menu Item' => '禁用菜单项',
      'Add to Dashboard' => '添加至控制面板',
      'Failed to load custom PHID "%s"!' => '无法加载自定义PHID“%s”！',
      'Query: %s' => '查询：%s',
      'Run a search query. Intended for debugging and development.' => '运行搜索查询。意在调试及开发。',
      '—' => '—',
      'Personal Saved Queries' => '个人保存查询',
      'Ignored Common Word' => '已忽略常用字词',
      'You must choose a link name.' => '您必须选择链接名称。',
      'Global Menu Items' => '全域菜单项',
      'You must choose a label name.' => '您必须选择标签名称。',
      'Edit the menu for your personal account.' => '为您的个人账户编辑菜单。',
      'Specify either --reset or --threshold.' => '指定--reset或--threshold。',
      'Queries' => '查询',
      'Already Default' => '已作为默认',
      'No services need initialization.' => '没有需要初始化的服务。',
      'Add New Menu Item...' => '添加新的菜单项...',
      'Untitled "%s" Item' => '无标题“%s”项',
      'You must name the query.' => '您必须对查询命名。',
      'Choose Item Icon' => '选择项图标',
      'Edit Menu Item: %s' => '编辑菜单项：%s',
      'Open Documents' => '打开文档',
      'Search Ngram' => '搜索Ngram',
      'Enable Menu Item' => '启用菜单项',
      'Global Saved Queries' => '全域保存查询',
      'Configure Menu' => '配置菜单',
      'Bucket' => '桶',
      'Query Errors' => '查询错误',
      'Not supported.' => '不支持。',
      'You must choose a form.' => '您必须选择一个表单。',
      'Mandatory Item' => '强制项目',
      'Profile Menu Items' => '详情菜单项',
      'Current Default' => '当前默认值',
      'Query Name' => '查询名',
      'Object Fields' => '对象字段',
      'Constraints' => '约束',
      'Result Ordering' => '重置排序',
      'Edit Saved Query' => '编辑保存的查询',
      'Motivator' => '动力',
      'Menu Items' => '菜单项目',
      'Hide Query' => '隐藏查询',
      'Set Default Query' => '设置默认查询',
      'Select a document type...' => '选择文档类型...',
      '(Restricted/Invalid Project)' => '（受限制/无效项目）',
      'Delete Query' => '删除查询',
      'Current Menu Items' => '当前菜单项',
      'Menu Item' => '菜单项',
      'Attachments' => '附件',
      'Fulltext Search Results' => '全文搜索结果',
      'Document Status' => '记载状态',
      'Engine: Search' => '引擎：搜索',
      'Profile Menu Item' => '详情菜单项',
      '"2022-12-25" or "7 days ago"...' => '“2022-12-25”或“7天前”……',
      'You can choose a builtin or saved query as a starting point for filtering
    results by selecting it with `queryKey`. If you don\'t specify a `queryKey`,
    the query will start with no constraints.
    For example, many applications have builtin queries like `"active"` or
    `"open"` to find only active or enabled results. To use a `queryKey`, specify
    it like this:
    ```lang=json, name="Selecting a Builtin Query"
    {
      ...
      "queryKey": "active",
      ...
    }
    ```
    The table below shows the keys to use to select builtin queries and your
    saved queries, but you can also use **any** query you run via the web UI as a
    starting point. You can find the key for a query by examining the URI after
    running a normal search.
    You can use these keys to select builtin queries and your configured saved
    queries:' => '你可以通过选择\'queryKey\'来选择一个内置或已储存的查询工具作为筛选结果的起点。如果你没有特别选择一个`queryKey`,
    搜寻将会不受限制。
    举个例子, 很多内置搜索功能如`"active"`或者
    `"open"` 只能搜索已被已被开启和正在活跃的文件. 为了明确只用 `queryKey`功能
    格式如下
    ```lang=json, name="Selecting a Builtin Query"
    {
      ...
      "queryKey": "active",
      ...
    }
    ```
    下面的表格将表达使用内置搜索和储存的搜索的关键词, 但是你可以使用 **任何** 搜索通过使用网页UI作为起点. 你可以找到搜索的关键词通过只用普通搜索来检查一个URI
    你可以使用这些关键词来选择内置搜索和你已经配置的搜索:',
      'Delete Menu Item' => '删除菜单项',
      'Cats spend most of their time plotting to kill their owner.' => '猫浪费了其多数时间策划杀死它们的主人。',
      'Edit Related Objects...' => '编辑相关对象...',
      'No saved queries.' => '没有保存的查询。',
      'Supports ID/PHID Queries' => '支持ID/PHID查询',
      'By default, only basic information about objects is returned. If you want
    more extensive information, you can use available `attachments` to get more
    information in the results (like subscribers and projects).
    Generally, requesting more information means the query executes more slowly
    and returns more data (in some cases, much more data). You should normally
    request only the data you need.
    To request extra data, specify which attachments you want in the `attachments`
    parameter:
    ```lang=json, name="Example Attachments Request"
    {
      ...
      "attachments": {
        "subscribers": true
      },
      ...
    }
    ```
    This example specifies that results should include information about
    subscribers. In the return value, each object will now have this information
    filled out in the corresponding `attachments` value:
    ```lang=json, name="Example Attachments Result"
    {
      ...
      "data": [
        {
          ...
          "attachments": {
            "subscribers": {
              "subscriberPHIDs": [
                "PHID-WXYZ-2222",
              ],
              "subscriberCount": 1,
              "viewerIsSubscribed": false
            }
          },
          ...
        },
        ...
      ],
      ...
    }
    ```
    These attachments are available:' => '默认情况下, 只有物体的基本信息会被回复. 如果你想要更多的延申信息,你可以通过可用的‘附件’来从结果中获取更多的额外信息(如关注者和项目).
    通常情况下, 请求更多的信息代表着查询会更加缓慢且回馈更多信息(在一些情况中，可以获得极其多的信息).正常情况下, 你应该只申请你所需要的信息。
    为了申请额外信息，请在‘附件’中明确表达你所需要的信息。
    parameter:
    ```lang=json, name="Example Attachments Request"
    {
      ...
      "attachments": {
        "subscribers": true
      },
      ...
    }
    ```
    在此例中，附件表达了只需要有关关注者的信息. 在回复中, 每条信息将会与‘附件’中所要求的信息相关。
    ```lang=json, name="Example Attachments Result"
    {
      ...
      "data": [
        {
          ...
          "attachments": {
            "subscribers": {
              "subscriberPHIDs": [
                "PHID-WXYZ-2222",
              ],
              "subscriberCount": 1,
              "viewerIsSubscribed": false
            }
          },
          ...
        },
        ...
      ],
      ...
    }
    ```
    以下为可用附件：',
      'Edit Builtin Item' => '编辑内建项',
      'Cat Facts' => '猫事实',
      'Search Index Versions' => '搜索索引版本',
      '\'%s\' is not a builtin!' => '“%s”不是内建函数！',
      'All Open Objects' => '所有开放对象',
      'Disable Query' => '禁用查询',
      'Divider' => '分隔器',
      'Manage Menu' => '管理菜单',
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => '最大记录的猫，从鼻子到尾巴接近11英寸长。',
      'Invalid Relationship' => '无效关系',
      'IDs' => 'ID',
      'PHIDs' => 'PHID',
      'Save Query' => '保存查询',
      'Full-Text Search' => '全文搜索',
      'Edit Menu Item' => '编辑菜单项',
      'NOTE' => '注意',
      '"%s" must be a date before "%s".' => '“%s”必须是在“%s”之前的日期。',
      'Fulltext Search' => '全文搜索',
      'Use `order` to choose an ordering for the results.
    Either specify a single key from the builtin orders (these are a set of
    meaningful, high-level, human-readable orders) or specify a custom list of
    low-level columns.
    To use a high-level order, choose a builtin order from the table below
    and specify it like this:
    ```lang=json, name="Choosing a Result Order"
    {
      ...
      "order": "newest",
      ...
    }
    ```
    These builtin orders are available:' => '使用`order`来为结果选择一个顺序。
    要么指定一个从内置结果中选择‘single key\'（那里有一系列的有意义的，高等级，人类可读的顺序）或自定一个自定义的低等级列的清单。
    为使用一个高等级的顺序，从下方表格选择一个内置的顺序
    并像这样指定:
    ```lang=json, name="Choosing a Result Order"
    {
      ...
      "order": "newest",
      ...
    }
    ```
    以下为可用的内置顺序：',
      'Document Types' => '文档类型',
      'Profile Menu User Guide' => '详情菜单用户指导',
      'Saved Queries' => '保存的查询',
      '(Restricted/Invalid Form)' => '（受限制/无效表单）',
      'All Objects' => '所有对象',
      'Link' => '链接',
      'Enable Query' => '启用查询',
      'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => '该项目不能设置为默认项目。这通常是因为项目没有其自己的页面，或链接到外部页面。',
      'Browse Results' => '浏览结果',
      'Exact Search' => '精确搜索',
      'Created By Me' => '由我创建',
      'Disable Query?' => '禁用查询？',
      'Use Results' => '使用结果',
      'Order By' => '排序方式',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => '您不能创建与对象“%s”间的关联，因为对象不存在，或不能加载。',
      'Edit Query' => '编辑查询',
      'Searched For:' => '查找：',
      '%s (Not Available)' => '%s（不可用）',
      '(Restricted/Invalid Application)' => '（受限制/无效的应用）',
      'Not Defaultable' => '无法设为默认',
      'Really Delete Query?' => '真的要删除查询么？',
      'Query offset is too large. offset+limit=%s (max=%s)' => '查询偏移泰达。偏移+限制=%s（最大=%s）',
      'Edit Queries...' => '编辑查询...',
      'Browse Document Types' => '浏览文档类型',
      '(Restricted/Invalid Conpherence)' => '（受限制/无效的Conpherence）',
      'Queries are limited to returning 100 results at a time. If you want fewer
    results than this, you can use `limit` to specify a smaller limit.
    If you want more results, you\'ll need to make additional queries to retrieve
    more pages of results.
    The result structure contains a `cursor` key with information you\'ll need in
    order to fetch the next page of results. After an initial query, it will
    usually look something like this:
    ```lang=json, name="Example Cursor Result"
    {
      ...
      "cursor": {
        "limit": 100,
        "after": "1234",
        "before": null,
        "order": null
      }
      ...
    }
    ```
    The `limit` and `order` fields are describing the effective limit and order the
    query was executed with, and are usually not of much interest. The `after` and
    `before` fields give you cursors which you can pass when making another API
    call in order to get the next (or previous) page of results.
    To get the next page of results, repeat your API call with all the same
    parameters as the original call, but pass the `after` cursor you received from
    the first call in the `after` parameter when making the second call.
    If you do things correctly, you should get the second page of results, and
    a cursor structure like this:
    ```lang=json, name="Second Result Page"
    {
      ...
      "cursor": {
        "limit": 5,
        "after": "4567",
        "before": "7890",
        "order": null
      }
      ...
    }
    ```
    You can now continue to the third page of results by passing the new `after`
    cursor to the `after` parameter in your third call, or return to the previous
    page of results by passing the `before` cursor to the `before` parameter. This
    might be useful if you are rendering a web UI for a user and want to provide
    "Next Page" and "Previous Page" links.
    If `after` is `null`, there is no next page of results available. Likewise,
    if `before` is `null`, there are no previous results available.' => '每次搜索会被限制到100条结果. 如果你想要更少的结果, 你可以使用‘limit’来明确限制结果数量。
    如果你想要更多结果，则需要更多搜索来获得更多页面的内容。
    结果结构内含一个包括你需要的信息的`cursor`功能来取出下一页的内容。. 在起始搜索之后, 结果会像这个。
    ```lang=json, name="Example Cursor Result"
    {
      ...
      "cursor": {
        "limit": 100,
        "after": "1234",
        "before": null,
        "order": null
      }
      ...
    }
    ```
    `limit`和`order`描述搜索的有效限制和顺序, 通常不会引起太大的兴趣.  `after` 和
    `before`会告诉你在通过其他API通话时通过的指针来获得下一页（或上一页）的内容。
    为了获得下一页的内容, 使用你原本通话相同的参数重复你的API通话, 但是在第二次通话，需要通过你在第一次通话中使用的\'After\'.
    如果你正确进行了上述的步骤，你应该就可以得到第二页的内容, 一个正确的指示结构应该是这样的：
    ```lang=json, name="Second Result Page"
    {
      ...
      "cursor": {
        "limit": 5,
        "after": "4567",
        "before": "7890",
        "order": null
      }
      ...
    }
    ```
    你可以持续进行来得到第三页的内容通过通过新的‘after\'
    指针 `after` 中第三个通话的参数, 或者通过回到上一页的结果通过通过上一页的’After\'. 这个可能会有用如果你在为一个新用户渲染一个新的网页UI并且像提供
    "下一页"和 "上一页"网页.
    如果`after` 是 `null`,这样下一页内容将不可用。
    相同的
    如果 `before` 是 `null`, 那么上一页内用将不可用。',
      'Engine Name' => '引擎名称',
    );
  }

}
