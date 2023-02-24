<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection body
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection diary
     * @property Grid\Column|Collection match_id
     * @property Grid\Column|Collection match_time
     * @property Grid\Column|Collection categoryId
     * @property Grid\Column|Collection excerpt
     * @property Grid\Column|Collection tagIds
     * @property Grid\Column|Collection source
     * @property Grid\Column|Collection sourceUrl
     * @property Grid\Column|Collection promoted
     * @property Grid\Column|Collection featured
     * @property Grid\Column|Collection thumb
     * @property Grid\Column|Collection hits
     * @property Grid\Column|Collection userId
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection seo_title
     * @property Grid\Column|Collection seo_description
     * @property Grid\Column|Collection seo_keyword
     * @property Grid\Column|Collection typeId
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection season_id
     * @property Grid\Column|Collection competition_id
     * @property Grid\Column|Collection competition_name
     * @property Grid\Column|Collection competition_logo
     * @property Grid\Column|Collection home_team_id
     * @property Grid\Column|Collection home_team_name
     * @property Grid\Column|Collection home_team_logo
     * @property Grid\Column|Collection away_team_id
     * @property Grid\Column|Collection away_team_name
     * @property Grid\Column|Collection away_team_logo
     * @property Grid\Column|Collection status_id
     * @property Grid\Column|Collection neutral
     * @property Grid\Column|Collection note
     * @property Grid\Column|Collection home_scores
     * @property Grid\Column|Collection away_scores
     * @property Grid\Column|Collection home_position
     * @property Grid\Column|Collection away_position
     * @property Grid\Column|Collection coverage
     * @property Grid\Column|Collection venue_id
     * @property Grid\Column|Collection referee_id
     * @property Grid\Column|Collection related_id
     * @property Grid\Column|Collection agg_score
     * @property Grid\Column|Collection round
     * @property Grid\Column|Collection environment
     * @property Grid\Column|Collection sport_id
     * @property Grid\Column|Collection lottery_type
     * @property Grid\Column|Collection issue
     * @property Grid\Column|Collection issue_num
     * @property Grid\Column|Collection lottery_id
     * @property Grid\Column|Collection is_same
     * @property Grid\Column|Collection lineup_confirmed
     * @property Grid\Column|Collection home_formation
     * @property Grid\Column|Collection away_formation
     * @property Grid\Column|Collection lineup_home
     * @property Grid\Column|Collection lineup_away
     * @property Grid\Column|Collection link
     * @property Grid\Column|Collection sequence
     * @property Grid\Column|Collection parentId
     * @property Grid\Column|Collection isOpen
     * @property Grid\Column|Collection isNewWin
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection body(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection diary(string $label = null)
     * @method Grid\Column|Collection match_id(string $label = null)
     * @method Grid\Column|Collection match_time(string $label = null)
     * @method Grid\Column|Collection categoryId(string $label = null)
     * @method Grid\Column|Collection excerpt(string $label = null)
     * @method Grid\Column|Collection tagIds(string $label = null)
     * @method Grid\Column|Collection source(string $label = null)
     * @method Grid\Column|Collection sourceUrl(string $label = null)
     * @method Grid\Column|Collection promoted(string $label = null)
     * @method Grid\Column|Collection featured(string $label = null)
     * @method Grid\Column|Collection thumb(string $label = null)
     * @method Grid\Column|Collection hits(string $label = null)
     * @method Grid\Column|Collection userId(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection seo_title(string $label = null)
     * @method Grid\Column|Collection seo_description(string $label = null)
     * @method Grid\Column|Collection seo_keyword(string $label = null)
     * @method Grid\Column|Collection typeId(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection season_id(string $label = null)
     * @method Grid\Column|Collection competition_id(string $label = null)
     * @method Grid\Column|Collection competition_name(string $label = null)
     * @method Grid\Column|Collection competition_logo(string $label = null)
     * @method Grid\Column|Collection home_team_id(string $label = null)
     * @method Grid\Column|Collection home_team_name(string $label = null)
     * @method Grid\Column|Collection home_team_logo(string $label = null)
     * @method Grid\Column|Collection away_team_id(string $label = null)
     * @method Grid\Column|Collection away_team_name(string $label = null)
     * @method Grid\Column|Collection away_team_logo(string $label = null)
     * @method Grid\Column|Collection status_id(string $label = null)
     * @method Grid\Column|Collection neutral(string $label = null)
     * @method Grid\Column|Collection note(string $label = null)
     * @method Grid\Column|Collection home_scores(string $label = null)
     * @method Grid\Column|Collection away_scores(string $label = null)
     * @method Grid\Column|Collection home_position(string $label = null)
     * @method Grid\Column|Collection away_position(string $label = null)
     * @method Grid\Column|Collection coverage(string $label = null)
     * @method Grid\Column|Collection venue_id(string $label = null)
     * @method Grid\Column|Collection referee_id(string $label = null)
     * @method Grid\Column|Collection related_id(string $label = null)
     * @method Grid\Column|Collection agg_score(string $label = null)
     * @method Grid\Column|Collection round(string $label = null)
     * @method Grid\Column|Collection environment(string $label = null)
     * @method Grid\Column|Collection sport_id(string $label = null)
     * @method Grid\Column|Collection lottery_type(string $label = null)
     * @method Grid\Column|Collection issue(string $label = null)
     * @method Grid\Column|Collection issue_num(string $label = null)
     * @method Grid\Column|Collection lottery_id(string $label = null)
     * @method Grid\Column|Collection is_same(string $label = null)
     * @method Grid\Column|Collection lineup_confirmed(string $label = null)
     * @method Grid\Column|Collection home_formation(string $label = null)
     * @method Grid\Column|Collection away_formation(string $label = null)
     * @method Grid\Column|Collection lineup_home(string $label = null)
     * @method Grid\Column|Collection lineup_away(string $label = null)
     * @method Grid\Column|Collection link(string $label = null)
     * @method Grid\Column|Collection sequence(string $label = null)
     * @method Grid\Column|Collection parentId(string $label = null)
     * @method Grid\Column|Collection isOpen(string $label = null)
     * @method Grid\Column|Collection isNewWin(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection body
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection diary
     * @property Show\Field|Collection match_id
     * @property Show\Field|Collection match_time
     * @property Show\Field|Collection categoryId
     * @property Show\Field|Collection excerpt
     * @property Show\Field|Collection tagIds
     * @property Show\Field|Collection source
     * @property Show\Field|Collection sourceUrl
     * @property Show\Field|Collection promoted
     * @property Show\Field|Collection featured
     * @property Show\Field|Collection thumb
     * @property Show\Field|Collection hits
     * @property Show\Field|Collection userId
     * @property Show\Field|Collection code
     * @property Show\Field|Collection seo_title
     * @property Show\Field|Collection seo_description
     * @property Show\Field|Collection seo_keyword
     * @property Show\Field|Collection typeId
     * @property Show\Field|Collection content
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection season_id
     * @property Show\Field|Collection competition_id
     * @property Show\Field|Collection competition_name
     * @property Show\Field|Collection competition_logo
     * @property Show\Field|Collection home_team_id
     * @property Show\Field|Collection home_team_name
     * @property Show\Field|Collection home_team_logo
     * @property Show\Field|Collection away_team_id
     * @property Show\Field|Collection away_team_name
     * @property Show\Field|Collection away_team_logo
     * @property Show\Field|Collection status_id
     * @property Show\Field|Collection neutral
     * @property Show\Field|Collection note
     * @property Show\Field|Collection home_scores
     * @property Show\Field|Collection away_scores
     * @property Show\Field|Collection home_position
     * @property Show\Field|Collection away_position
     * @property Show\Field|Collection coverage
     * @property Show\Field|Collection venue_id
     * @property Show\Field|Collection referee_id
     * @property Show\Field|Collection related_id
     * @property Show\Field|Collection agg_score
     * @property Show\Field|Collection round
     * @property Show\Field|Collection environment
     * @property Show\Field|Collection sport_id
     * @property Show\Field|Collection lottery_type
     * @property Show\Field|Collection issue
     * @property Show\Field|Collection issue_num
     * @property Show\Field|Collection lottery_id
     * @property Show\Field|Collection is_same
     * @property Show\Field|Collection lineup_confirmed
     * @property Show\Field|Collection home_formation
     * @property Show\Field|Collection away_formation
     * @property Show\Field|Collection lineup_home
     * @property Show\Field|Collection lineup_away
     * @property Show\Field|Collection link
     * @property Show\Field|Collection sequence
     * @property Show\Field|Collection parentId
     * @property Show\Field|Collection isOpen
     * @property Show\Field|Collection isNewWin
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection body(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection diary(string $label = null)
     * @method Show\Field|Collection match_id(string $label = null)
     * @method Show\Field|Collection match_time(string $label = null)
     * @method Show\Field|Collection categoryId(string $label = null)
     * @method Show\Field|Collection excerpt(string $label = null)
     * @method Show\Field|Collection tagIds(string $label = null)
     * @method Show\Field|Collection source(string $label = null)
     * @method Show\Field|Collection sourceUrl(string $label = null)
     * @method Show\Field|Collection promoted(string $label = null)
     * @method Show\Field|Collection featured(string $label = null)
     * @method Show\Field|Collection thumb(string $label = null)
     * @method Show\Field|Collection hits(string $label = null)
     * @method Show\Field|Collection userId(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection seo_title(string $label = null)
     * @method Show\Field|Collection seo_description(string $label = null)
     * @method Show\Field|Collection seo_keyword(string $label = null)
     * @method Show\Field|Collection typeId(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection season_id(string $label = null)
     * @method Show\Field|Collection competition_id(string $label = null)
     * @method Show\Field|Collection competition_name(string $label = null)
     * @method Show\Field|Collection competition_logo(string $label = null)
     * @method Show\Field|Collection home_team_id(string $label = null)
     * @method Show\Field|Collection home_team_name(string $label = null)
     * @method Show\Field|Collection home_team_logo(string $label = null)
     * @method Show\Field|Collection away_team_id(string $label = null)
     * @method Show\Field|Collection away_team_name(string $label = null)
     * @method Show\Field|Collection away_team_logo(string $label = null)
     * @method Show\Field|Collection status_id(string $label = null)
     * @method Show\Field|Collection neutral(string $label = null)
     * @method Show\Field|Collection note(string $label = null)
     * @method Show\Field|Collection home_scores(string $label = null)
     * @method Show\Field|Collection away_scores(string $label = null)
     * @method Show\Field|Collection home_position(string $label = null)
     * @method Show\Field|Collection away_position(string $label = null)
     * @method Show\Field|Collection coverage(string $label = null)
     * @method Show\Field|Collection venue_id(string $label = null)
     * @method Show\Field|Collection referee_id(string $label = null)
     * @method Show\Field|Collection related_id(string $label = null)
     * @method Show\Field|Collection agg_score(string $label = null)
     * @method Show\Field|Collection round(string $label = null)
     * @method Show\Field|Collection environment(string $label = null)
     * @method Show\Field|Collection sport_id(string $label = null)
     * @method Show\Field|Collection lottery_type(string $label = null)
     * @method Show\Field|Collection issue(string $label = null)
     * @method Show\Field|Collection issue_num(string $label = null)
     * @method Show\Field|Collection lottery_id(string $label = null)
     * @method Show\Field|Collection is_same(string $label = null)
     * @method Show\Field|Collection lineup_confirmed(string $label = null)
     * @method Show\Field|Collection home_formation(string $label = null)
     * @method Show\Field|Collection away_formation(string $label = null)
     * @method Show\Field|Collection lineup_home(string $label = null)
     * @method Show\Field|Collection lineup_away(string $label = null)
     * @method Show\Field|Collection link(string $label = null)
     * @method Show\Field|Collection sequence(string $label = null)
     * @method Show\Field|Collection parentId(string $label = null)
     * @method Show\Field|Collection isOpen(string $label = null)
     * @method Show\Field|Collection isNewWin(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
