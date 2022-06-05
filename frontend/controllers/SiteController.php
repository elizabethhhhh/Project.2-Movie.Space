<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\AddFeedbackForm;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays schedule page.
     *
     * @return mixed
     */
    public function actionSchedule ()
    {
        return $this->render('schedule');
    }

    /**
     * Displays discounts page.
     *
     * @return mixed
     */
    public function actionDiscounts()
    {
        return $this->render('discounts');
    }


    /**
     * Displays film1 page.
     *
     * @return mixed
     */
    public function actionFilm1()
    {
        return $this->render('film1');
    }

    /**
     * Displays film2 page.
     *
     * @return mixed
     */
    public function actionFilm2()
    {
        return $this->render('film2');
    }

    /**
     * Displays film3 page.
     *
     * @return mixed
     */
    public function actionFilm3()
    {
        return $this->render('film3');
    }

    /**
     * Displays film4 page.
     *
     * @return mixed
     */
    public function actionFilm4()
    {
        return $this->render('film4');
    }

    /**
     * Displays film5 page.
     *
     * @return mixed
     */
    public function actionFilm5()
    {
        return $this->render('film5');
    }

    /**
     * Displays film6 page.
     *
     * @return mixed
     */
    public function actionFilm6()
    {
        return $this->render('film6');
    }

    /**
     * Displays film7 page.
     *
     * @return mixed
     */
    public function actionFilm7 ()
    {
        return $this->render('film7');
    }

    /**
     * Displays film8 page.
     *
     * @return mixed
     */
    public function actionFilm8 ()
    {
        return $this->render('film8');
    }

    /**
     * Displays film9 page.
     *
     * @return mixed
     */
    public function actionFilm9 ()
    {
        return $this->render('film9');
    }

    /**
     * Displays schedule1 page.
     *
     * @return mixed
     */
    public function actionSchedule1 ()
    {
        return $this->render('schedule1');
    }

    /**
     * Displays schedule2 page.
     *
     * @return mixed
     */
    public function actionSchedule2 ()
    {
        return $this->render('schedule2');
    }

    /**
     * Displays schedule3 page.
     *
     * @return mixed
     */
    public function actionSchedule3 ()
    {
        return $this->render('schedule3');
    }

    /**
     * Displays schedule4 page.
     *
     * @return mixed
     */
    public function actionSchedule4 ()
    {
        return $this->render('schedule4');
    }

    /**
     * Displays schedule5 page.
     *
     * @return mixed
     */
    public function actionSchedule5 ()
    {
        return $this->render('schedule5');
    }

    /**
     * Displays schedule6 page.
     *
     * @return mixed
     */
    public function actionSchedule6 ()
    {
        return $this->render('schedule6');
    }


    /**
     * Displays account page.
     *
     * @return mixed
     */
    public function actionAccount ()
    {
        return $this->render('account');
    }

    /**
     * Displays questionpage page.
     *
     * @return mixed
     */
    public function actionQuestionpage ()
    {
        return $this->render('questionpage');
    }







/**
     * Displays test1 page.
     *
     * @return mixed
     */
    public function actionTest1()
    {
        return $this->render('test1');
    }

/**
     * Displays test1 page.
     *
     * @return mixed
     */
    public function actionTest2()
    {
        return $this->render('test2');
    }

    /**
     * Displays test3 page.
     *
     * @return mixed
     */
    public function actionTest3()
    {
        return $this->render('test3');
    }

    /**
     * Displays test3 page.
     *
     * @return mixed
     */
    public function actionTest4()
    {
        return $this->render('test4');
    }





    /**
     * Displays test3 page.
     *
     * @return mixed
     */
    public function actionAddfeedback()
    {
        $model = new AddFeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->render('addfeedback', [
                'model' => $model,
            ]);
        } else {
            return $this->render('addfeedback', [
                'model' => $model,
            ]);
        }
    }


    public function actionUserfeedbacks()
    {
        $query = AddFeedbackForm::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $userfeedbacks = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('userfeedback', [
            'userfeedbacks' => $userfeedbacks,
            'pagination' => $pagination,
        ]);
    }



    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
