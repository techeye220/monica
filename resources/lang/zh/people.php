<?php

return [

    //index
    'people_list_number_kids' => ':count 个孩子',
    'people_list_last_updated' => '最近更新:',
    'people_list_number_reminders' => ':count 个提醒',
    'people_list_blank_title' => '您还没有任何联系人',
    'people_list_blank_cta' => '添加某人',
    'people_list_sort' => '排序',
    'people_list_stats' => ':count 个联系人',
    'people_list_firstnameAZ' => '以名字A → Z排序',
    'people_list_firstnameZA' => '以名字 Z → A排序',
    'people_list_lastnameAZ' => '以姓A → Z排序',
    'people_list_lastnameZA' => '以姓Z → A排序',
    'people_list_lastactivitydateNewtoOld' => '以最后活动日期从近到远排序',
    'people_list_lastactivitydateOldtoNew' => '以最后活动日期从远到近排序',
    'people_list_filter_tag' => '拥有以下标签的联系人：',
    'people_list_clear_filter' => '清除筛选',
    'people_list_contacts_per_tags' => ':count 个联系人',
    'people_search' => '搜索联系人...',
    'people_search_no_results' => '未找到相关联系人:(',
    'people_list_account_usage' => '您的账户已联系人使用情况是：:current/:limit ',
    'people_list_account_upgrade_title' => '升级您的帐户, 以打开全部功能。',
    'people_list_account_upgrade_cta' => '立即升级',
    'people_list_untagged' => '查看未加标签的联系人',
    'people_list_filter_untag' => '所有未加标签的联系人',

    // people add
    'people_add_title' => '添加一位新的联系人',
    'people_add_missing' => '没有联系人，现在添加一个',
    'people_add_firstname' => '名字',
    'people_add_middlename' => '中间名 (可选)',
    'people_add_lastname' => '姓（可选）',
    'people_add_nickname' => '昵称（可选）',
    'people_add_cta' => '添加',
    'people_save_and_add_another_cta' => '提交并添加其他人',
    'people_add_success' => ':name 已成功创建',
    'people_add_gender' => '性别',
    'people_delete_success' => '联系人已被删除',
    'people_delete_message' => '如果需要删除此联系人,',
    'people_delete_click_here' => '点击这里',
    'people_delete_confirmation' => '确实要删除此联系人吗？删除是永久性的。',
    'people_add_birthday_reminder' => '祝: name生日快乐',
    'people_add_import' => '是否要 <a href=":url">导入您的联系人</a>？',
    'people_edit_email_error' => '您的联系人中已经有人使用此电子邮件，请更换一个',
    'people_export' => '导出为 vCard',
    'people_add_reminder_for_birthday' => '创建一个年度生日提醒事项',

    // show
    'section_contact_information' => '联系人信息',
    'section_personal_activities' => '活动',
    'section_personal_reminders' => '提醒',
    'section_personal_tasks' => '任务',
    'section_personal_gifts' => '礼物',
    'section_personal_notes' => '便签',

    //
    'link_to_list' => '联系人',

    // Header
    'edit_contact_information' => '编辑联系人信息',
    'call_button' => '记录通话',
    'set_favorite' => '您收藏的联系人将在联系人列表置顶显示。',

    // Stay in touch
    'stay_in_touch' => '常联系*',
    'stay_in_touch_frequency' => '常联系*提醒频率：每天|常联系*提醒频率：每 {count} 天',
    'stay_in_touch_invalid' => '频率必须大于0。',
    'stay_in_touch_premium' => '您需要升级到高级账户来使用这个功能！',
    'stay_in_touch_modal_title' => '常联系*',
    'stay_in_touch_modal_desc' => '我们将会用邮件提醒您与{firstname}保持联系。',
    'stay_in_touch_modal_label' => '每几天发送一封提醒邮件...？',

    // Calls
    'modal_call_title' => '记录通话',
    'modal_call_comment' => '你们说了什么？（可选）',
    'modal_call_date' => '通话是今天早些时候发生的。',
    'modal_call_change' => '更改',
    'modal_call_exact_date' => '通话日期',
    'calls_add_success' => '已保存通话记录。',
    'call_delete_confirmation' => '你确定要删除此通话记录吗?',
    'call_delete_success' => '成功删除通话记录！',
    'call_title' => '通话记录',
    'call_empty_comment' => '无详细信息',
    'call_blank_title' => '记录您与:name的通话记录',
    'call_blank_desc' => '你打给:name',

    // Conversation
    'conversation_blank' => '记录您与:name通过短信或社交媒体的信息记录',
    'conversation_delete_link' => '删除对话',
    'conversation_edit_title' => '编辑对话',
    'conversation_edit_delete' => '您是否要删除这个对话？操作无法撤销。',
    'conversation_delete_success' => '对话成功删除',
    'conversation_add_title' => '记录一个新对话',
    'conversation_add_when' => '你们何时进行的对话？',
    'conversation_add_who_wrote' => '谁说的？',
    'conversation_add_how' => '你们怎么交流？',
    'conversation_add_you' => '您',
    'conversation_add_content' => '写下你们说的话',
    'conversation_add_what_was_said' => '您说了什么？',
    'conversation_add_another' => '添加另一条消息',
    'conversation_list_table_messages' => '消息',
    'conversation_list_table_content' => '部分内容(最新消息)',
    'conversation_list_title' => '对话',
    'conversation_list_cta' => '记录对话',

    // age - birthday
    'birthdate_not_set' => '未设置生日',
    'age_approximate_in_years' => '大概:age岁',
    'age_exact_in_years' => ':age岁',
    'age_exact_birthdate' => '出生:date',

    // additional information
    'information_edit_success' => '记录更新成功',
    'information_edit_title' => '编辑 :name的个人信息',
    'information_edit_avatar' => '联系人照片/头像',
    'information_edit_max_size' => '最大值 :size Kb',
    'information_edit_firstname' => '名字',
    'information_edit_lastname' => '姓氏（可选）',
    'information_edit_description' => '说明 (可选)',
    'information_edit_description_help' => '用于在联系人列表中添加一些元素（如有必要）',
    'information_edit_linkedin' => '领英® 链接 (可选)',
    'information_edit_unknown' => '我不知道具体年龄',
    'information_edit_probably' => '此人可能是...',
    'information_edit_not_year' => '我知道这个人的生日的日期和月份, 但不知道哪一年。',
    'information_edit_exact' => '我知道这个人的确切出生日期...',
    'information_no_linkedin_defined' => '未绑定领英®',
    'information_no_work_defined' => '未定义工作信息',
    'information_work_at' => '在 :company工作',
    'linkedin_profile' => '领英®上的个人资料',
    'work_add_cta' => '更新工作信息',
    'work_edit_success' => '工作信息已成功更新',
    'work_edit_title' => '更新:name的工作信息',
    'work_edit_job' => '职位名称 (可选)',
    'work_edit_company' => '公司 (可选)',
    'work_information' => '工作信息',

    // food preferencies
    'food_preferencies_add_success' => '食品偏好已被保存',
    'food_preferencies_edit_description' => '也许:firstname或:family的家庭有过敏，或者不喜欢一瓶特定的酒等。把这些信息列在这里，在下次和邀请他们吃饭时可以在这里看到这些信息。',
    'food_preferencies_edit_description_no_last_name' => '也许:firstname有过敏情况，或者不喜欢一瓶特定的酒等。把这些信息列在这里，在下次和邀请他们吃饭时可以在这里看到这些信息。',
    'food_preferencies_edit_title' => '注明食物偏好',
    'food_preferencies_edit_cta' => '保存食物偏好',
    'food_preferencies_title' => '食物偏好',
    'food_preferencies_cta' => '添加食物偏好',

    // reminders
    'reminders_blank_title' => '您有什么关于:name的提醒吗？',
    'reminders_blank_add_activity' => '添加提醒',
    'reminders_add_title' => '你需要关于:name的提醒吗？',
    'reminders_add_description' => '请提醒我...',
    'reminders_add_next_time' => '您希望下一次关于这个的提醒的时间是？',
    'reminders_add_once' => '仅一次',
    'reminders_add_recurrent' => '每',
    'reminders_add_starting_from' => '提醒我',
    'reminders_add_cta' => '添加提醒',
    'reminders_edit_update_cta' => '更新提醒',
    'reminders_add_error_custom_text' => '您需要为此提醒指定文本',
    'reminders_create_success' => '已成功添加提醒',
    'reminders_delete_success' => '已成功删除提醒',
    'reminders_update_success' => '已成功更新提醒',

    'reminder_frequency_day' => '每天 | 每:number天',
    'reminder_frequency_week' => '每周 | 每:number星期',
    'reminder_frequency_month' => '每月 | 每:number月',
    'reminder_frequency_year' => '每年 | 每:number年',
    'reminder_frequency_one_time' => '在:date',
    'reminders_delete_confirmation' => '确实要删除此提醒吗？',
    'reminders_delete_cta' => '删除',
    'reminders_next_expected_date' => '在',
    'reminders_cta' => '添加提醒',
    'reminders_description' => '我们将发送电子邮件的每一个提醒如下。每天早上都会发出提醒,。无法删除自动为生日添加的提醒。如果要更改这些日期, 请编辑联系人的生日。',
    'reminders_one_time' => '一次性',
    'reminders_type_week' => '周',
    'reminders_type_month' => '月',
    'reminders_type_year' => '年',
    'reminders_birthday' => ':name的生日',
    'reminders_free_plan_warning' => '您当前使用的是免费版。若需要邮件提醒，请升级您的账户。',

    // relationships
    'relationship_form_add' => '添加一个新的关系',
    'relationship_form_edit' => '修改一个已有关系',
    'relationship_form_is_with' => '这个人是...',
    'relationship_form_add_choice' => '这是与谁的关系？',
    'relationship_form_create_contact' => '添加一个新的人',
    'relationship_form_associate_contact' => '导入一位已存在的联系人',
    'relationship_form_associate_dropdown' => '请从下拉菜单选择一位联系人',
    'relationship_form_associate_dropdown_placeholder' => '搜索并选择一位现有联系人',
    'relationship_form_also_create_contact' => '将此人创建为您的联系人',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => '您暂时没有能与 :name 链接的联系人',
    'relationship_delete_confirmation' => '您确定要将关系删除吗？本操作无法撤销。',
    'relationship_unlink_confirmation' => '您确定要将关系删除吗？此操作不会从您的联系人列表将其删除。',
    'relationship_form_add_success' => '关系设置完成',
    'relationship_form_deletion_success' => '此关系已删除',

    // tasks
    'tasks_blank_title' => '您暂时还没任务。',
    'tasks_form_title' => '标题',
    'tasks_form_description' => '描述 (可选)',
    'tasks_add_task' => '添加任务',
    'tasks_delete_success' => '成功删除任务！',
    'tasks_complete_success' => '成功变更任务！',

    // activities
    'activity_title' => '活动',
    'activity_type_category_simple_activities' => '一般活动',
    'activity_type_category_sport' => '运动',
    'activity_type_category_food' => '食物',
    'activity_type_category_cultural_activities' => '文化',
    'activity_type_just_hung_out' => '约会',
    'activity_type_watched_movie_at_home' => '看电影',
    'activity_type_talked_at_home' => '谈心',
    'activity_type_did_sport_activities_together' => '一起运动',
    'activity_type_ate_at_his_place' => '在对方家里做客',
    'activity_type_went_bar' => '泡吧',
    'activity_type_ate_at_home' => '在家吃饭',
    'activity_type_picknicked' => '野餐',
    'activity_type_ate_restaurant' => '在饭店吃',
    'activity_type_went_theater' => '看戏',
    'activity_type_went_concert' => '去音乐会',
    'activity_type_went_play' => '出去玩',
    'activity_type_went_museum' => '去博物馆',
    'activities_add_activity' => '添加活动',
    'activities_more_details' => '更多详情',
    'activities_hide_details' => '隐藏详情',
    'activities_delete_confirmation' => '确实要删除此活动吗?',
    'activities_item_information' => ':Activity，发生于:date',
    'activities_add_title' => '你与:name做了什么？',
    'activities_summary' => '描述你做了什么',
    'activities_add_pick_activity' => '活动分类(可选)',
    'activities_add_date_occured' => '活动日期',
    'activities_add_optional_comment' => '备注（可选）',
    'activities_add_cta' => '记录活动',
    'activities_blank_title' => '记录您与 :name 之间的点滴',
    'activities_blank_add_activity' => '添加活动',
    'activities_add_success' => '已成功添加活动',
    'activities_add_error' => '添加活动时出现错误',
    'activities_update_success' => '活动已成功更新',
    'activities_delete_success' => '活动已成功删除',
    'activities_who_was_involved' => '谁参与了？',
    'activities_activity' => '活动类别',
    'activities_view_activities_report' => '查看活动报告',
    'activities_profile_title' => ':name 与您之间的活动报告',
    'activities_profile_subtitle' => '截至目前为止您与:name的活动记录如下：近一年共 :activities_last_twelve_months次，总共 :total_activities次|截至目前为止您与:name的活动记录如下：近一年共 :activities_last_twelve_months次，总共 :total_activities次',
    'activities_profile_year_summary_activity_types' => ':year年活动类型汇总',
    'activities_profile_year_summary' => ':year年你们一起进行的活动',
    'activities_profile_number_occurences' => ':value 次活动|:value 次活动',

    // notes
    'notes_create_success' => '便签已成功创建',
    'notes_update_success' => '便笺已成功保存',
    'notes_delete_success' => '注释已成功删除',
    'notes_add_cta' => '添加注释',
    'notes_favorite' => '添加/删除喜爱标记',
    'notes_delete_title' => '删除便签',
    'notes_delete_confirmation' => '确实要删除此便签吗？',

    // gifts
    'gifts_title' => '礼物往来',
    'gifts_add_success' => '已成功添加礼物',
    'gifts_delete_success' => '礼物已成功删除',
    'gifts_delete_confirmation' => '是否确实要删除此礼物？',
    'gifts_add_gift' => '添加礼物',
    'gifts_link' => '链接',
    'gifts_for' => '给：',
    'gifts_delete_cta' => '删除',
    'gifts_add_title' => '与:name的礼物来往',
    'gifts_add_gift_idea' => '礼品创意',
    'gifts_add_gift_already_offered' => '送出的礼物',
    'gifts_add_gift_received' => '收到的礼物',
    'gifts_add_gift_title' => '这是什么礼物？',
    'gifts_add_link' => '礼物链接 (可选)',
    'gifts_add_value' => '值 (可选)',
    'gifts_add_comment' => '备注 (可选)',
    'gifts_add_someone' => '这个礼物是送给:name的家人',
    'gifts_ideas' => '心愿单',
    'gifts_offered' => '送出的礼物',
    'gifts_offered_as_an_idea' => '标记为心愿单',
    'gifts_received' => '收到的礼物',
    'gifts_view_comment' => '查看评论',
    'gifts_mark_offered' => '标记为提供',
    'gifts_update_success' => '礼物已成功更新',

    // debts
    'debt_delete_confirmation' => '是否确实要删除此债务？',
    'debt_delete_success' => '已成功删除债务',
    'debt_add_success' => '已成功添加债务',
    'debt_title' => '债务',
    'debt_add_cta' => '增加债务',
    'debt_you_owe' => '您欠:amount',
    'debt_they_owe' => ':name欠您:amount',
    'debt_add_title' => '债务管理',
    'debt_add_you_owe' => ':name借给您',
    'debt_add_they_owe' => '您借给:name',
    'debt_add_amount' => '数额',
    'debt_add_reason' => '事由（可选）',
    'debt_add_add_cta' => '增加债务',
    'debt_edit_update_cta' => '更新债务',
    'debt_edit_success' => '债务已成功更新',
    'debts_blank_title' => '管理您与:name之间的债务关系',

    // tags
    'tag_edit' => '编辑标签',
    'tag_add' => '添加标签',

    // Introductions
    'introductions_sidebar_title' => '你们是如何认识的？',
    'introductions_blank_cta' => '您如何遇到的:name',
    'introductions_title_edit' => '你是怎么认识:name的？',
    'introductions_additional_info' => '你在哪里相遇',
    'introductions_edit_met_through' => '有人把你介绍给这个人吗？',
    'introductions_no_met_through' => '没有人',
    'introductions_first_met_date' => '第一次相见',
    'introductions_no_first_met_date' => '我不记得具体日期',
    'introductions_first_met_date_known' => '这是我们相遇的日子',
    'introductions_add_reminder' => '添加提醒以庆祝此事件发生的周年纪念',
    'introductions_update_success' => '你成功更新了关于你们相识的故事',
    'introductions_met_through' => '通过 <a href=":url">:name</a>遇到',
    'introductions_met_date' => '在:date遇到',
    'introductions_reminder_title' => '你第一次遇见的那一天的周年纪念日',

    // Deceased
    'deceased_reminder_title' => ':name的去世周年怀念',
    'deceased_mark_person_deceased' => '将此人标记为已逝者',
    'deceased_know_date' => '我知道这个人去世日期',
    'deceased_add_reminder' => '为此日期添加提醒',
    'deceased_label' => '逝者',
    'deceased_label_with_date' => '在:date去世',
    'deceased_age' => '享年',

    // Contact information
    'contact_info_title' => '联系信息',
    'contact_info_form_content' => '内容',
    'contact_info_form_contact_type' => '联系方式',
    'contact_info_form_personalize' => '个性化',
    'contact_info_address' => '生活在',

    // Addresses
    'contact_address_title' => '地址',
    'contact_address_form_name' => '标签 (可选)',
    'contact_address_form_street' => '街 (可选)',
    'contact_address_form_city' => '城市 (可选)',
    'contact_address_form_province' => '省 (可选)',
    'contact_address_form_postal_code' => '邮政编码 (可选)',
    'contact_address_form_country' => '国家 (可选)',

    // Pets
    'pets_kind' => '宠物种类',
    'pets_name' => '名字 (可选)',
    'pets_create_success' => '已成功添加宠物',
    'pets_update_success' => '宠物已更新',
    'pets_delete_success' => '宠物已被删除',
    'pets_title' => '宠物',
    'pets_reptile' => '爬行动物',
    'pets_bird' => '鸟',
    'pets_cat' => '猫',
    'pets_dog' => '狗',
    'pets_fish' => '鱼',
    'pets_hamster' => '仓鼠',
    'pets_horse' => '马',
    'pets_rabbit' => '兔子',
    'pets_rat' => '鼠',
    'pets_small_animal' => '小动物',
    'pets_other' => '其它',

    // life events
    'life_event_list_tab_life_events' => '生活事件',
    'life_event_list_tab_other' => '便签、提醒..',
    'life_event_list_title' => '生活事件',
    'life_event_list_title' => '生活事件',
    'life_event_blank' => '记录在{name} 身上发生的事情以供将来参考',
    'life_event_list_cta' => '添加生活事件',
    'life_event_create_category' => '全部类别',
    'life_event_create_life_event' => '添加生活事件',
    'life_event_create_default_title' => '标题 (可选)',
    'life_event_create_default_story' => '故事 (可选)',
    'life_event_create_date' => '你不需要详细到某一天 - 只需要提供年份就行',
    'life_event_create_default_description' => '添加你知道的信息',
    'life_event_create_add_yearly_reminder' => '为该事件添加年度提醒',
    'life_event_create_success' => '生活事件添加成功',
    'life_event_delete_title' => '删除生活事件',
    'life_event_delete_description' => '确实要删除此生活事件吗？删除是永久性的。',
    'life_event_delete_success' => '事件已删除',
    'life_event_date_it_happened' => '发生日期',
    'life_event_sentence_new_job' => '开始了新的工作',
    'life_event_sentence_retirement' => '退休',
    'life_event_sentence_new_school' => '开始上学',
    'life_event_sentence_study_abroad' => '出国留学',
    'life_event_sentence_volunteer_work' => '开始志愿服务',
    'life_event_sentence_published_book_or_paper' => '发表了一篇论文',
    'life_event_sentence_military_service' => '开始服役',
    'life_event_sentence_new_relationship' => '开始一段关系',
    'life_event_sentence_engagement' => '订婚了',
    'life_event_sentence_marriage' => '结婚',
    'life_event_sentence_anniversary' => '周年纪念日',
    'life_event_sentence_expecting_a_baby' => '想要孩子',
    'life_event_sentence_new_child' => '有个孩子',
    'life_event_sentence_new_family_member' => '新增了家庭成员',
    'life_event_sentence_new_pet' => '养了宠物',
    'life_event_sentence_end_of_relationship' => '结束了一段关系',
    'life_event_sentence_loss_of_a_loved_one' => '失去了心爱的人',
    'life_event_sentence_moved' => '搬家了',
    'life_event_sentence_bought_a_home' => '买了新房子',
    'life_event_sentence_home_improvement' => '装修了',
    'life_event_sentence_holidays' => '去度假',
    'life_event_sentence_new_vehicle' => '买了辆新车',
    'life_event_sentence_new_roommate' => '有了新室友',
    'life_event_sentence_overcame_an_illness' => '熬过了疾病',
    'life_event_sentence_quit_a_habit' => '戒掉一个习惯',
    'life_event_sentence_new_eating_habits' => '开始新的饮食习惯',
    'life_event_sentence_weight_loss' => '减肥了',
    'life_event_sentence_wear_glass_or_contact' => '开始佩戴玻璃或隐形眼镜',
    'life_event_sentence_broken_bone' => '折断了骨头',
    'life_event_sentence_removed_braces' => '去掉了牙齿矫正器',
    'life_event_sentence_surgery' => '做了手术',
    'life_event_sentence_dentist' => '去看牙医了',
    'life_event_sentence_new_sport' => '开始运动',
    'life_event_sentence_new_hobby' => '有了新爱好',
    'life_event_sentence_new_instrument' => '学会了新乐器',
    'life_event_sentence_new_language' => '学了一门新的语言',
    'life_event_sentence_tattoo_or_piercing' => '纹身了或者打了耳洞',
    'life_event_sentence_new_license' => '获得驾照',
    'life_event_sentence_travel' => '旅游了',
    'life_event_sentence_achievement_or_award' => '获得成就或奖项',
    'life_event_sentence_changed_beliefs' => '改变信仰',
    'life_event_sentence_first_word' => '第一次发言',
    'life_event_sentence_first_kiss' => '第一次接吻',
];
