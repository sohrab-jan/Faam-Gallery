<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string|null $type
 * @property string|null $mobile
 * @property string $email
 * @property string $password
 * @property string|null $image
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\AdminFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutTrashed()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Artist
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $city
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $full_name
 * @method static \Database\Factories\ArtistFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Artist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist withoutTrashed()
 */
	class Artist extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Artwall
 *
 * @property int $id
 * @property string $exhibition_name
 * @property string $artist
 * @property string $title
 * @property string $image_artist
 * @property string $image_exhibition
 * @property string $exhibition_short_des
 * @property string $exhibition_long_des
 * @property string $upcoming_title
 * @property string $date
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall query()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereArtist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereExhibitionLongDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereExhibitionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereExhibitionShortDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereImageArtist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereImageExhibition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereUpcomingTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwall withoutTrashed()
 */
	class Artwall extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string|null $website
 * @property string|null $image_blog
 * @property string|null $title
 * @property string|null $description
 * @property string|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImageBlog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withoutTrashed()
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int $product_id
 * @property int|null $user_id
 * @property int $quantity
 * @property int $price
 * @property string|null $address
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserId($value)
 */
	class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CmsPage
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CmsPage whereUrl($value)
 */
	class CmsPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string|null $phone
 * @property string|null $city
 * @property bool|null $artist
 * @property bool|null $collector
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereIsArtist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereIsCollector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact withoutTrashed()
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FrameAssets
 *
 * @property int $id
 * @property string $name
 * @property string $side
 * @property string $picture
 * @property string $face
 * @property string $alt
 * @property float $wide
 * @property float $deep
 * @property string $pm
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereDeep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereFace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets wherePm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrameAssets whereWide($value)
 */
	class FrameAssets extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Framing
 *
 * @property int $id
 * @property string $frame_id
 * @property int|null $product_id
 * @property string|null $user_id
 * @property int $width
 * @property int $height
 * @property int|null $mount_board
 * @property string|null $mount_color
 * @property int|null $glass
 * @property string|null $image
 * @property string|null $printing_id
 * @property float|null $price
 * @property string|null $scale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Framing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Framing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Framing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereFrameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereGlass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereMountBoard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereMountColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing wherePrintingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereScale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framing whereWidth($value)
 */
	class Framing extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\News
 *
 * @property-read \App\Models\Admin|null $admin
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Printing
 *
 * @property int $id
 * @property string|null $printing_id
 * @property string|null $frame_id
 * @property string|null $user_id
 * @property int $width
 * @property int $height
 * @property float|null $price
 * @property string $paper
 * @property string|null $image
 * @property int|null $frame
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Printing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereFrame($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereFrameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing wherePaper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing wherePrintingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printing whereWidth($value)
 */
	class Printing extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $size
 * @property int $width
 * @property int $height
 * @property string|null $slug
 * @property string|null $image
 * @property string|null $price
 * @property string|null $product_short_des
 * @property string|null $product_long_des
 * @property int|null $quantity
 * @property int $artist_id
 * @property int|null $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Artist|null $artist
 * @property-read \App\Models\Category|null $category
 * @property-read bool $in_stock
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereArtistId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductLongDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductShortDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $title
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\ServiceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Service withoutTrashed()
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subcategory
 *
 * @property int $id
 * @property string $subcategory_name
 * @property int $category_id
 * @property string $category_name
 * @property int $product_count
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereSubcategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereUpdatedAt($value)
 */
	class Subcategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $phone
 * @property string|null $photo
 * @property string|null $address
 * @property string $role
 * @property bool $active
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

