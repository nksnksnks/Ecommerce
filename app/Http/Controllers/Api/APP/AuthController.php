<?php

namespace App\Http\Controllers\Api\APP;

use App\Enums\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRegister;
use App\Http\Requests\User\AuthRequest;
use App\Models\User;
use App\Notifications\VerifyCodeEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class AuthController extends Controller
{
    private User $user;

    public function __construct(
        User $user
    )
    {
        $this->user = $user;
    }

    /**
     * @author Sonnk
     * @OA\Post (
     *     path="/api/app/auth/register",
     *     tags={"APP Tài khoản"},
     *     summary="Đăng ký",
     *     operationId="users/create",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="email", type="string"),
     *              @OA\Property(property="password", type="string"),
     *              @OA\Property(property="display_name", type="string"),
     *          @OA\Examples(
     *              summary="Examples",
     *              example = "Examples",
     *              value = {
     *                  "email": "sonnk@gmail.com",
     *                  "password": "123123",
     *                  "display_name": "sonnk",
     *                  },
     *              ),
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *             @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Success."),
     *          )
     *     ),
     * )
     */
    // public function register(UserRegister $request)
    // {
    //     $validated = $request->validated();
    //     if ($request->validated()) {
    //         $user = User::create($validated);
    
    //         return response()->json(['user' => $user, 'msg' => 'Đăng ký thành công' ], 200);
    //     } else {

    //         $errors = $request->errors();
    
    //         return response()->json(['errors' => $errors, 'msg' => 'Đăng ký thất bại' ], 200);
    //     }
    // }

    public function register(UserRegister $request): JsonResponse
    {
        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user = User::create($validated);
            DB::commit();

            return response()->json([
                'status' => Constant::SUCCESS_CODE,
                'message' => trans('messages.success.users.check_mail'),
                'data' => $user
            ], Constant::SUCCESS_CODE);

        } catch (\Throwable $th) {

            DB::rollBack();

            return response()->json([
                'status' => Constant::FALSE_CODE,
                'message' => $th->getMessage(),
                'data' => []
            ], Constant::INTERNAL_SV_ERROR_CODE);
        }
    }
}